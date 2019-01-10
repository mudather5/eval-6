<?php
class User{
      protected $id,
                $first_name,
                $email,
                $password,
                $password_1;


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
                 * Get the value of firstname
                 */ 
                public function getFirst_name()
                {
                                return $this->first_name;
                }

                /**
                 * Get the value of email
                 */ 
                public function getEmail()
                {
                                return $this->email;
                }

                /**
                 * Get the value of password
                 */ 
                public function getPassword()
                {
                                return $this->password;
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
                 * Set the value of firstname
                 *
                 * @return  self
                 */ 
                public function setFirst_name($first_name)
                {
                                $this->first_name = $first_name;

                                return $this;
                }

                /**
                 * Set the value of email
                 *
                 * @return  self
                 */ 
                public function setEmail($email)
                {
                                $this->email = $email;

                                return $this;
                }

                /**
                 * Set the value of password
                 *
                 * @return  self
                 */ 
                public function setPassword($password)
                {
                                $this->password = $password;

                                return $this;
                }

                /**
                 * Get the value of password1
                 */ 
                public function getPassword_1()
                {
                                return $this->password_1;
                }

                /**
                 * Set the value of password1
                 *
                 * @return  self
                 */ 
                public function setPassword_1($password_1)
                {
                                $this->password_1 = $password_1;

                                return $this;
                }
}



?>