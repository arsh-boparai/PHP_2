<html>
<head>
</head>
<body>
<?php 
	class employee {
        var $Ename;
        var $Eid; 
		function set_data($new_name,new_id) { 
            $this->Ename = $new_name;  
            $this->Eid = $new_id;
 		}
 
   		function get_data() {
            return $this->Ename;
            return $this->Eid;
		}
    } 
    
    class salary {

        var $Bpay;
        function set_data($new_pay){
            $this->Bpay = $new_pay;
        }
        
        function get_data(){
            return $this->Bpay;
        }

    }
?>
</body>
</html>