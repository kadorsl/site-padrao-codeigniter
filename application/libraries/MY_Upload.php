<?php

class MY_Upload extends CI_Upload
{
    var $size;
    var $types;
    var $height;
    var $width;
    var $path;
    var $name;
    var $config;

    /**
     * Retorna o valor da propriedade size
     *
     * @access public
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Seta o um valor à propriedade size
     *
     * @access public
     * @param mixed $size Value to set
     * @return self
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * Retorna o valor da propriedade types
     *
     * @access public
     * @return mixed
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * Seta o um valor à propriedade types
     *
     * @access public
     * @param mixed $types Value to set
     * @return self
     */
    public function setTypes($types)
    {
        $this->types = $types;
    }

    /**
     * Retorna o valor da propriedade height
     *
     * @access public
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Seta o um valor à propriedade height
     *
     * @access public
     * @param mixed $height Value to set
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * Retorna o valor da propriedade width
     *
     * @access public
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Seta o um valor à propriedade width
     *
     * @access public
     * @param mixed $width Value to set
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * Retorna o valor da propriedade path
     *
     * @access public
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Seta o um valor à propriedade path
     *
     * @access public
     * @param mixed $path Value to set
     * @return self
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * Retorna o valor da propriedade name
     *
     * @access public
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Seta o um valor à propriedade name
     *
     * @access public
     * @param mixed $name Value to set
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    public function setConfiguration()
    {
        //$this->config['file_name']     = $this->getName();
        $this->config['allowed_types'] = $this->getTypes();
        $this->config['max_size']      = $this->getSize();
        $this->config['max_height']    = $this->getHeight();
        $this->config['max_width']     = $this->getWidth();
        $this->config['upload_path']   = $this->getPath();

        return $this->config;
    }

}
