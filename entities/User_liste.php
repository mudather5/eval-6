<?php
class User_liste{
      protected $id,
                $last_name,
                $first_name,
                $code = "cj9dma6b)",
                $nb_book;


    public function __construct(array $array)
    {
        $this->hydrate($array);
    }


    public function hydrate(array $array)
	{
		foreach ($array as $key => $value)
		{
			// On récupère le nom du setter correspondant à l'attribut.
			$method = 'set'.ucfirst($key);

			// Si le setter correspondant existe.
			if (method_exists($this, $method))
			{
                $this->$method($value);
				// On appelle le setter.
                
			}
		}
	}



               

      /**
       * Get the value of id
       */ 
      public function getId()
      {
            return $this->id;
      }

      /**
       * Set the value of id
       *
       * @return  self
       */ 
      public function setId($id)
      {
            $this->id = $id;

            return $this;
      }

                /**
                 * Get the value of last_name
                 */ 
                public function getLast_name()
                {
                                return $this->last_name;
                }

                /**
                 * Set the value of last_name
                 *
                 * @return  self
                 */ 
                public function setLast_name($last_name)
                {
                                $this->last_name = $last_name;

                                return $this;
                }

                /**
                 * Get the value of first_name
                 */ 
                public function getFirst_name()
                {
                   return $this->first_name;
                }

                /**
                 * Set the value of first_name
                 *
                 * @return  self
                 */ 
                public function setFirst_name(string $first_name)
                {
                  $this->first_name = $first_name;

                  return $this;
                }

                /**
                 * Get the value of idinify
                 */ 
                public function getCode()
                {
                                return $this->code;
                }

                /**
                 * Set the value of idinify
                 *
                 * @return  self
                 */ 
                public function setCode($code)
                {
                                $this->code = $code;

                                return $this;
                }

                /**
                 * Get the value of nb_book
                 */ 
                public function getNb_book()
                {
                                return $this->nb_book;
                }

                /**
                 * Set the value of nb_book
                 *
                 * @return  self
                 */ 
                public function setNb_book($nb_book)
                {
                                $this->nb_book = $nb_book;

                                return $this;
                }
}



?>