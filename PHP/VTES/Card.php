 <?php 
    class Card {
        var $name;
        var $textdesc;
        var $artist;
        var $set;
        var $quantity;
        var $desireable;

        function addquantity()
        {
            $this-> quantity = true;
        }
        function adddesireable()
        {
            $this-> desireable = true;
        }

    } 
?>