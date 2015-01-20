<?php
namespace Mozu\Api\Resource\Commerce\Catalog\Products;

require_once __DIR__ . '/../../../../../../../BaseTest.php';

use Mozu\Api\ApiException;
use Mozu\Tests\BaseTest;
use Mozu\Api\Resources\Commerce\Catalog\Admin\ProductResource;
use Mozu\Api\Resources\Platform\TenantResource;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Resources\Commerce\Catalog\Admin\Products\LocationInventoryResource;

/**
 * Test class for ProductResource.
 * Generated by PHPUnit on 2013-09-25 at 15:38:56.
 */
class LocationInventoryResourceTest extends BaseTest
{
    /**
     * @var ProductResource
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
    	$apiContext = new ApiContext($this->tenantId,0,1,1);
        $this->object = new LocationInventoryResource($apiContext,DataViewMode::LIVE);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Mozu\Api\Resources\Commerce\Catalog\Admin\ProductResource::getProducts
     * @todo Implement testGetProducts().
     */
    public function testGetInventory()
    {
        try{
            $inventoryInventoryCollection = $this->object->getLocationInventories("1001");
            $this->assertNotEmpty($inventoryInventoryCollection);
        } catch(ApiException $exc) {
            $this->fail($exc->getMessage());
        }
    }

    
}
?>