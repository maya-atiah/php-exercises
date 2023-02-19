<?php
function power_of_two($num)
{
   if(($num & ($num - 1)) == 0)
    {
		return "power of 2";
    }
   else
    {
		return "not power of 2";
    }
}
echo power_of_two("8")."\n";

?>