<?php
class User_liste{
      protected $id,
                $last_name,
                $first_name,
                $code = "cj9dma6b)",
                $nb_book,
                $lists_books;


    public function __construct(array $array)
    {
        $this->hydrate($array);
    }


    public function hydrate(array $array)
	{
		foreach ($array as $key => $value)
		{
			///We retrieve the name of the setter corresponding to the attribute.
			$method = 'set'.ucfirst($key);

			//if the setter correspondant existe.
			if (method_exists($this, $method))
			{
                $this->$method($value);
				// we call the setter.
                
			}
		}
	}



               

      /**
       * Get the value of id
       * @return  $id
       */ 
      public function getId()
      {
            return $this->id;
      }

      /**
       * Set the value of id
       *
       * @return  $id
       */ 
      public function setId($id)
      {
            $this->id = $id;

            return $this;
      }

                /**
                 * Get the value of last_name
                  * @return  $Last_name
                 */ 
                public function getLast_name()
                {
                  return $this->last_name;
                }

                /**
                 * Set the value of last_name
                 *
                 * @return  $last_name
                 */ 
                public function setLast_name($last_name)
                {
                                $this->last_name = $last_name;

                                return $this;
                }

                /**
                 * Get the value of first_name
                   * @return  $last_name

                 */ 
                public function getFirst_name()
                {
                   return $this->first_name;
                }

                /**
                 * Set the value of first_name
                 *
                 * @return  $first_name
                 */ 
                public function setFirst_name(string $first_name)
                {
                  $this->first_name = $first_name;

                  return $this;
                }

                /**
                 * Get the value of idinify
                 * @return  $code
                 */ 
                public function getCode()
                {
                                return $this->code;
                }

                /**
                 * Set the value of idinify
                 *
                 * @return  $code
                 */ 
                public function setCode($code)
                {
                                $this->code = $code;

                                return $this;
                }

                /**
                 * Get the value of nb_book
                 * @return  $nb_book
                 */ 
                public function getNb_book()
                {
                                return $this->nb_book;
                }

                /**
                 * Set the value of nb_book
                 *
                 * @return  $nb_book
                 */ 
                public function setNb_book($nb_book)
                {
                                $this->nb_book = $nb_book;

                                return $this;
                }

                /**
                 * Get the value of lists_books
                 * @return  $lists_books
                 */ 
                public function getLists_books()
                {
                                return $this->lists_books;
                }

                /**
                 * Set the value of lists_books
                 *
                 * @return  $lists_books
                 */ 
            public function setLists_books($lists_books)
                {
                  $this->lists_books = $lists_books;

                  return $this;
                }
}



?>