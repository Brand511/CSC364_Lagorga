<?php

require_once (FS_TEMPLATES . 'templateEngine.php');


class sampleStaticTemplate extends templateEngine {

    /**
     * This is the html code that makes up the template.  This will
     * be unique to and set in eacb instance of the class
     *
     * @var null
     */
    protected $template = '<h1>Sample Template</h1><p>This is where we put the html we want to render.</p>';



}