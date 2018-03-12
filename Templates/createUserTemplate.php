<?php

class createUserTemplate extends templateEngine {

    /**
     * These are the data fields expected for this template. This
     * is a white list of fields.
     *
     * @var array

    /**
     * The constructor will be used to save the HTML template to the $template class property.
     * The easiest way to do this is using HEREDOC format.
     *
     * sampleTemplate constructor.
     */
    public function __construct(){

        $temp = <<<HTML
            <div class="container" >
                <div class="row justify-content-center">
                    <h2>Create a new User</h2>
                </div>
                <div class="row justify-content-center">
                    <form class="col-md-8" action="/createUser.php" method="POST" >
                        <div class="form-group row">
                            <label for="firstName" class="col-md-3 col-form-label">Name</label>
                            <div class="col-md-3 w-80">                                
                                <input id="firstName" name="firstName" placeholder="First" type="text" class="form-control here" required="required">                                    
                            </div>
                            <div class="col-md-3 w-80">
                                <input id="middleName" name="middleName" placeholder="Middle" type="text" class="form-control here">
                            </div>
                            <div class="col-md-3 w-80">
                                <input id="lastName" name="lastName" placeholder="Last" type="text" class="form-control here" required="required">
                            </div>
                        </div>
                                                
                        <div class="form-group row">
                            <label for="address1" class="col-md-3 col-form-label">Address</label>
                            <div class="col-md-9">
                                <input id="address1" name="address1" type="text" class="form-control here">
                            </div>
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-md-9 offset-md-3">
                                <input id="address2" name="address2" type="text" class="form-control here">
                            </div>
                        </div>
                        
                        <div class="form-group row">                            
                            <div class="col-md-4 offset-md-3">
                                <input id="city" name="city" type="text" placeholder="City" class="form-control here">
                            </div>
                            <div class="col-md-3">
                                <select id="state" name="state" class="custom-select">
                                    <option value="">-- State --</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <input id="zip" name="zip" type="text" placeholder="Zip" class="form-control here">
                            </div>                            
                        </div>
                        
                        <div class="form-group row">
                            <label for="phone" class="col-md-3 col-form-label">Phone</label>
                            <div class="col-md-9">
                                <input id="phone" name="phone" type="text" class="form-control here" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-9">
                                <input id="email" name="email" type="text" class="form-control here" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label">Password</label>
                            <div class="col-md-9">
                                <input id="password" name="password" type="password" class="form-control here" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-3 col-md-9">
                                <button name="submit" type="submit" class="btn btn-primary">Create User</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
HTML;
        $this->template = $temp;

    }

}


?>

