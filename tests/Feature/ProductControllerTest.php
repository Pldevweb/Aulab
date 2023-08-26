<?php
use Tests\TestCase;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Foundation\Testing\WithFaker;

class ProductControllerTest extends TestCase
{
    use WithFaker;

    public function testProductsAreFetchedCorrectly()
    {
        // Mock the behavior of fetching products
        $products = Product::factory()->count(5)->make();

        // Create an instance of the ProductController
        $controller = new ProductController();

        // Call the index method and pass the mocked products
        $response = $controller->index();

        // Assert that the response is an instance of a view
        $this->assertInstanceOf(\Illuminate\View\View::class, $response);

        // Assert that the view has a variable named 'products'
        $this->assertArrayHasKey('products', $response->getData());
    }
}
