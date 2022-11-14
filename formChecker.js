function check(){

        var item1 = document.getElementById('item1').value;
        var item2 = document.getElementById('item2').value;
        var item3 = document.getElementById('item3').value;
        var item4 = document.getElementById('item4').value;

        if (item1 <0)
        {
                alert("Value must be greater than or equal to 0");
                return false;
        }
        else if (item2<0) {
                alert("Value must be greater than or equal to 0");
                return false;
        }
        else if (item3<0) {
                alert("Value must be greater than or equal to 0");
                return false;
        }
        else if (item4<0) {
                alert("Value must be greater than or equal to 0");
                return false;
        }
        else{
                return true;
        }
}

