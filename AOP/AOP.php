<?php
/**
 * @Description -- Program to demonstrate the AOP aplication
 */
class Service
{
    /**
     * @Servicetype_1 - Demo function
     */
    public function Servicetype_1()
    {
        echo "Servicetype_1 is executing\n";
    }
    /**
     * @Servicetype_1 - Demo function
     */
    public function Servicetype_2()
    {
        echo "Servicetype_2 is executing \n";
    }
}

/**
 * @adviceRegistered - to check for the valid user
 * @param string
 */
function adviceRegistered($name)
{
    if ($name == 'Suman') {
        return 1;
    } else {
        return 0;
    }

}

//aop_add_before('Services->Servicetype*()', 'adviceRegistered');

/**
 * Get the input from the user and check for the valid user
 */
echo "Enter the name : ";
$name     = readline();
$services = new Service();
/**
 * If user is valid call the methods.
 */
if (adviceRegistered($name) == 1) {
    $services->Servicetype_1();
    $services->Servicetype_2();
} else {
    echo "You are not registered";
}
