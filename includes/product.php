 <?php

/**
 * Class to handle interaction with the users table in the database.
 * This class will make use of the database connection created when a
 * script initializes.
 */


class Product
{

    /**
     * Currenct connection to database
     *
     * @var null
     */
    private $db = null;


    /**
     * List of valid fields and their types for this table
     *
     * @var array
     */
    private $whiteList = ['id' => 'int',
        'name' => 'varchar',
        'description' => 'varchar',
        'price' => 'float',
        'picture' => 'varchar',
        'sku' => 'varchar',
        'qty_available' => 'int',
        'date_added' => 'date',
        'supplier_ID' => 'int',
        'supplier_SKU' => 'varchar',
        'cost' => 'float',
    ];


    /**
     * Constructor that stores the database connection.
     *
     * User constructor.
     * @param $db
     */
    public function __construct($db)
    {
        $this->db = $db;
    }


    /**
     * Get user data for a specific user using the id
     *
     * @param $id
     * @return mixed
     */
    public function getProduct($id)
    {

        $sql = 'select * from products where id = ' . $id . ';';

        $result = $this->db->query($sql);

        return $result->fetch();

    }

    /**
     * Return all users.  If th active parameter is supplied,
     * return only the active or inactive users as appropriate
     * @param null $active
     * @return mixed
     */

    public function getProducts($active = null)
    {

        $sql = 'select * from products';

        if (!is_null($active)) {
            $sql .= ' where isActive = ' . $active . ';';
        } else {
            $sql .= ';';
        }

        $result = $this->db->query($sql);

        return $result->fetchAll();
    }


    public function create($data)
    {

        // Not used yet but a required field so stuff it with something
        $data['role_id'] = 1;

        $sql = 'INSERT into products ({{fields}}) VALUES ({{values}})';

        // Remove any fields that aren't in the white list
        $cleanData = $this->clean($data);

        // Build the list of fields that will be inserted into the table
        $fields = $this->buildFieldsList($cleanData);
        $sql = str_replace('{{fields}}', $fields, $sql);

        // Build the list of values that will be inserted into the table
        $values = $this->buildValuesList($cleanData);
        $sql = str_replace('{{values}}', $values, $sql);

        // Insert the data
        $result = $this->db->query($sql);

        return $result;

    }

    public function update($data)
    {
        $sql = "update products set name = '" . $data['name'] . "', sku = '" . $data['sku'] . "', price = '" . $data['price'] . "', description = '" . $data['description'] . "', supplier_id = '" . $data['supplier_id'] . "', supplier_sku = '" . $data['supplier_sku'] . "', picture = '" . $data['picture'] . "', cost = '" . $data['cost'] . "', qty_available = '" . $data['qty_available'] . "', date_added = '" . $data['date_added'] . "', isActive = '" . $data['isActive'] . "' where id = " . $data['id'] . ';';
        $result = $this->db->query($sql);
        return $result;
    }

    /**
     * Delete a user with a given ID by deactivating them
     * Set the isActive = 0 to deactivate
     *
     * @param $id
     * @return bool
     */
    public function delete($id)
    {

        $sql = 'update products set isActive = 1 where id = ' . $id . ';';

        $result = $this->db->query($sql);

        return $result;

    }

    private function clean($data)
    {

        foreach ($data as $key => $value) {
            if (!array_key_exists($key, $this->whiteList)) {
                unset($data[$key]);
            }

        }

        return $data;

    }

    private function buildFieldsList($data)
    {

        $fields = '';

        foreach ($data as $key => $value) {
            $fields .= $key . ', ';
        }

        $fields = substr($fields, 0, strlen($fields) - 2);

        return $fields;

    }

    private function buildValuesList($data)
    {

        $values = '';

        $w = $this->whiteList;

        // If the values are numeric then add value to list.  If string then also add the
        foreach ($data as $key => $value) {

            if (in_array($w[$key], ['int', 'float'])) {
                $values .= $value . ', ';
            } else {

                // Escape the string to handle special characters
                $value = $this->db->escape_string($value);

                $values .= "'" . $value . "', ";
            }
        }

        $values = substr($values, 0, strlen($values) - 2);

        return $values;

    }
}