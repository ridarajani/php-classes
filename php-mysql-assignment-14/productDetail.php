<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Product </h1>  

<?php 
    require("connection.php");
 ?>
 <?php   
    if(isset($_POST['submit']))
    {
        $product_name   = $_POST['product_name'];
        $price          = $_POST['price'];
        $color          = $_POST['color'];

        if(!empty( trim($product_name)) && !empty( trim($price)))
        {
            $insert_query = "insert into products(product_name,price,color) values('$product_name',$price,'$color')";
            $insert_result = mysqli_query($connection,$insert_query);
            if(!$insert_result)
            {
                echo "Error : ".mysqli_error($connection);
            }
            else{
                echo "Product Inserted.";
            }
        }

    }
?>
    
    <div>
        <form method="post">
            <div>
                <label>Product:</label>
                <input type="text" name="product_name" required>
            </div>
            <div>
                <label>Color:</label>
                <input type="text" name="color" required>
            </div>
            <div>
                <label>Price:</label>
                <input type="text" name="price" required>
            </div>
            <div>
                <input type="submit" name="submit" value="Add Product">
            </div>
        </form>
    </div>

    <?php 

    if(isset($_POST['submit_search']))
    {

        $name_query         = "" ;
        $price_query        = "" ;
        $color_query        = "" ;
        $Count              = 0 ;
        $WHERE              = "" ;
        $AND                = "";
        
        
        if(!empty(trim($_POST['productname'])))
        {
            if($Count)
            {
                $AND = " AND ";
            }
            $name_query  = $AND." product_name LIKE  '%" .$_POST['productname']. "%' ";
            $Count++;
        } 
        if(!empty(trim($_POST['productprice'])))
        {
            if($Count)
            {
                $AND = " AND ";
            }
            $price_query  = $AND." price = ".$_POST['productprice'];
            $Count++;
        } 
        if(!empty(trim($_POST['productcolor'])))
        {              
            if($Count)
            {
                $AND = " AND ";
            }
            $color_query         = $AND." color  LIKE  '%" .$_POST['productcolor']. "%' ";
            $Count++;
        } 
        if($Count)
        {
            $WHERE = " WHERE ";
        }
        $query = " select * from products ".$WHERE.$name_query.$price_query.$color_query; 
    }
    else
    {
        $query = " select * from products "; 
        
    }

    $result_set = mysqli_query($connection,$query);
    $products = mysqli_fetch_all($result_set,MYSQLI_ASSOC);
        
    ?>
     <h1> Product Listing </h1>  
    <form method="post">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot style="display: table-header-group !important;">
                <tr>
                    <th>Search</th>
                    <th><input placeholder="Product Name" name="productname" value="<?php echo isset($_POST['productname'])  ? $_POST['productname'] : ""  ?>" ></th>
                    <th><input placeholder="Product Color" name="productcolor" value="<?php echo isset($_POST['productcolor'])  ? $_POST['productcolor'] : ""  ?>"></th>
                    <th><input placeholder="Product Price" name="productprice" value="<?php echo isset($_POST['productprice'])  ? $_POST['productprice'] : ""  ?>"></th>
                    <th><input  type="submit" name="submit_search" value="Search"></th>
                </tr>
            </tfoot>
            <tbody> 
                <?php 
                    foreach($products as $product)
                    {
                ?>
                        <tr>
                            <td><?php echo $product['id']?></td>
                            <td><?php echo $product['product_name']?></td>
                            <td><?php echo $product['color']?></td>
                            <td><?php echo $product['price']?></td>
                            <td><a href="delete.php?id=<?php  echo $product['id']; ?>">Delete</a></td>
                            <td><a href="edit.php?id=<?php   echo $product['id']; ?>">Edit</a></td>
                        </tr>
                <?php
                   }
                ?>

            </tbody>
        </table>
    </form>
    <div>
        <a href="logout.php">Logout</a>
    </div>
    <div>
        <p>Prepared by : Rida Rajani</p>
    </div>
</body>
</html>