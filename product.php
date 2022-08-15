<?php
session_start();
	
class Product{
	private $productID;
	private $productname;
	private $price;
	
	public function __construct($id,$name,$price)
	{
		$this->productID = $id;
		$this->productname = $name;
		$this->price = $price;
	}
	public function getProductID()
	{
		return $this->productID;
	}
	public function getProductName()
	{
		return $this->productname;
	}
	public function getprice()
	{
		return $this->price;
	}
}
$products = array("1" => new Product(1,"Bag",2000.00),
                "2" => new Product(2,"watch",1000.00),
				"3" => new Product(3,"Ball",100.00));
				?>
<h1>Product List</h1>
<table border="2" >
<tr><th>ProductId</th><th>Product Name</th><th>Price</th><th>Actions</th></tr>

<?php
foreach($products as $product){
	?>
	<tr>
	<td><?php echo $product->getProductID();?></td>
	<td><?php echo $product->getproductName();?></td>
	<td><?php echo $product->getprice();?></td>
	<td><a href = "product.php?action=add&amp;productID="<?php echo $product->getProductID();?>">add</a>
	</tr>
<?php }
?>

</table>
<h1>Your Shopping Card</h1>
<table border = "2">
<?php
if(isset($_GET["action"] and $_GET["action"]== "add")
{
	
	$_SESSION = array();

}
	?>
	


