<?php

declare(strict_types = 1);

class Book
{
    protected $id;
    protected $title;
    protected $author;
    protected $category;
    protected $date;
    protected $summary;
    protected $user_id;
    protected $availability = 1;
    protected $image;




    /**
     * Constructor
     *
     * @param array $array
     */
    public function __construct(array $array)
    {
        $this->hydrate($array);
    }

    /**
     * Hydratation
     *
     * @param array $array
     *
     */
    public function hydrate(array $array)
    {
        foreach ($array as $key => $value) {
            //We retrieve the name of the setter corresponding to the attribute.
            $method = 'set'.ucfirst($key);

            //if le setter correspondant existe.
            if (method_exists($this, $method)) {
                // we call the setter.
                $this->$method($value);
            }
        }
    }

    //////////////////    SETTERS    //////////////////

    /**
     * Set the value of $id
     *
     * @param integer $id
     * @return self
     */
    public function setId($id)
    {
        $id = (int) $id;
        if ($id > 0) {
            $this->id = $id;
        }
        return $this;
    }




    //////////////////    GETTERS    //////////////////

    /**
     * Get the value of $id
     *
     * @return $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of title
     * @return  $title

     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the value of author
     * @return  author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get the value of summary
     * @return  $summary

     */ 
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set the value of title
     *
     * @return  $title
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Set the value of author
     *
     * @return  $author
     */ 
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Set the value of date
     *
     * @return  $data
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Set the value of summary
     *
     * @return  $summary
     */ 
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    
    

    /**
     * Get the value of catogry
     * @return  $category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of catogry
     *
     * @return  $category
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of image
     * @return  $image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }


   

    /**
     * Get the value of user_id
     *   @return  $user_id
     */ 
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     *
     * @return  $user_id
     */ 
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    
    /**
     * Get the value of availability
     *  @return $availability
     */ 
    public function getAvailability()
    {
        return $this->availability;
    }
    
    /**
     * Set the value of availability
     *
     * @return  $availability
     */ 
    public function setAvailability($availability)
    {
        $this->availability = $availability;
        
        return $this;
    }

    //function for borrow book 
    public function borrow($user_id){
        
        if($this->availability == 1){
            $this->availability = 0;
        }
            return $this->user_id = $user_id;
    }
     //function for return  book 

    public function return(){
        if($this->availability == 0){
            $this->availability = 1;
        }
            return $this->user_id = NULL;
    }
}