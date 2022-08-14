<!DOCTYPE html>
<html>

<head>

    <title> My form </title>


    <link rel="stylesheet" a href="fstyle.css">

</head>

<body>



    <div class="conteiner">

        <img src="img/3stl.png" alt="">

        <div class="navbar">


            <a href="index.php"> HOME</a>
            <a href="form.php">ADD DATA</a>
            <a href="vewdata.php"> RETREW DATA </a>
            <a href="form.php"> FIND DATA</a>


            <button class="btn"> <a href="logout.php" class="a"> Logout </a></button>

        </div>
    </div>

    <div class="h1">
        <h1> Add data in Database </h1>
    </div>

    <div class="main">

        <form method="POST" action="searchdata.php">

            <div class="search">
                <input type="text" name="key" placeholder="Serial Number" class="in">
                <input type="submit" value="Search by name" class="sb">
            </div>

        </form>
        <form method="POST" id="item_form">

            <div id="name">
                <h2 class="name">Serial Number</h2>
                <input type="text" name="Serialno" placeholder=" Serial Number" class="sname" required>

                <!-----    <div class="search">
                <form method="POST" action="searchkeyvalue.php" >
                    <input type="text" name="key" placeholder="Serial Num">
                    <input type="submit" value="search by name" class="sb">
                </div>
                 <br><br> ----------->
                <h2 class="name"> Part Number</h2>
                <input type="text" name="partno" placeholder=" Part Number" class="mno" required> <br><br>

                <h2 class="name"> Modle Name</h2>
                <input type="text" name="modelname" placeholder=" Model Name" class="mno"> <br><br>

                <h2 class="name"> Location</h2>
                <input type="text" name="loction" placeholder=" Location" class="mno"> <br>

                <h2 class="name"> Recipient Name</h2>
                <input type="text" name="rname" placeholder=" Recipient Name" class="mno"> <br><br>


                <h2 class="name"> Condition </h2>
                <select name="condi" class="form-control" required>
                    <option value=""> ---Choose Option</option>

                    <option value="not_use"> not_use </option>
                    <option value="used"> used</option>
                    <option value="fault"> fault </option>
                    <option value="repaire"> repaire</option>
                    <option value="New"> New </option>
                </select>

                <h2 class="name"> Device Type </h2>
                <select name="devicetype" class="form-control" required>
                    <option value=""> ---Choose Option</option>

                    <option value="Switch"> Switch </option>
                    <option value="Transmision"> Transmision</option>


                </select><br><br>

                <!---<input type="text"name ="condi" placeholder="  use or non use"> <br><br> -->


                <button type="button" value="insert data" onclick="add_item()" class="insert"> Submit</button>
                <button type="reset" value="reset" element class="button"> Reset </button>



            </div>
        </form>





        <!--<h1> search data Serial Number</h1> <br> -->

    </div>

</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script>
    function add_item() {

        var isvalid = false;
        var accForm = document.getElementById("item_form").elements;
        formData = new FormData();
        
        formData.append('Serialno', accForm['Serialno'].value);
        formData.append('partno', accForm['partno'].value);
        formData.append('modelname', accForm['modelname'].value);
        formData.append('condi', accForm['condi'].value);
        formData.append('devicetype', accForm['devicetype'].value);
        formData.append('loction',accForm['loction'].value);
        formData.append('rname',accForm['rname'].value);
        // validations
        // todo
        var isvalid = true;
    
        if (!isvalid) return;

        url="add_item.php";
        if (formData != null) {
            $.ajax({
                url: url,
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                success: function(response) {
                    console.log("============================== response ==============================");
                    console.log(response);
                    json_res = JSON.parse(response);
                    if (json_res.success == 1) {
                        //Clear Form fields
                        accForm['Serialno'].value = "";
                        accForm['partno'].value = "";
                        accForm['modelname'].value = "";

                        accForm['loction'].value = "";
                        accForm['rname'].value = "";
                        
                        alert('Successfully Inserted');
                    } else {
                        alert('Error: '+json_res.data);
                    }
                },
                error: function(request, status, error) {
                    console.log(" ================ Eror Occured ================");
                    console.log(request.responseText);
                    console.log(error);
                    location.reload();
                }
            });
        }
    }
</script>

</html>