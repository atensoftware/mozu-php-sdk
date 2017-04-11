<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Content\Documentlists;

use Mozu\Api\Clients\Content\Documentlists\DocumentClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Headers;

/**
* Use this subresource to manage documents in a document list.
*/
class DocumentResource {

		private $apiContext;
		private $dataViewMode;
		public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}
	



	/**
	* Retrieve the content associated with a document, such as a product image or PDF specifications file, by supplying the document ID.
	*
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function getDocumentContent($documentListName, $documentId)
	{
		$mozuClient = DocumentClient::getDocumentContentClient($this->dataViewMode, $documentListName, $documentId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieve the content associated with a document, such as a product image or PDF specifications file, by supplying the document ID.
	*
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getDocumentContentAsync($documentListName, $documentId)
	{
		$mozuClient = DocumentClient::getDocumentContentClient($this->dataViewMode, $documentListName, $documentId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Performs transformations on a document. For example, resizing an image.
	*
	* @param string $crop Crops the image based on the specified coordinates. The reference point for positive coordinates is the top-left corner of the image, and the reference point for negative coordinates is the bottom-right corner of the image.Usage: Example:  removes 10 pixels from all edges of the image.  leaves the image uncropped.
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
	* @param int $height Specifies an exact height dimension for the image, in pixels.
	* @param int $max Specifies a pixel limitation for the largest side of an image.
	* @param int $maxHeight Specifies a pixel limitation for the height of the image, preserving the aspect ratio if the image needs resizing.
	* @param int $maxWidth Specifies a pixel limitation for the width of the image, preserving the aspect ratio if the image needs resizing.
	* @param int $quality Adjusts the image compression. Accepts values from 0-100, where 100 = highest quality, least compression.
	* @param int $width Specifies an exact width dimension for the image, in pixels.
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function transformDocumentContent($documentListName, $documentId, $width =  null, $height =  null, $max =  null, $maxWidth =  null, $maxHeight =  null, $crop =  null, $quality =  null)
	{
		$mozuClient = DocumentClient::transformDocumentContentClient($documentListName, $documentId, $width, $height, $max, $maxWidth, $maxHeight, $crop, $quality);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Performs transformations on a document. For example, resizing an image.
	*
	* @param string $crop Crops the image based on the specified coordinates. The reference point for positive coordinates is the top-left corner of the image, and the reference point for negative coordinates is the bottom-right corner of the image.Usage: Example:  removes 10 pixels from all edges of the image.  leaves the image uncropped.
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
	* @param int $height Specifies an exact height dimension for the image, in pixels.
	* @param int $max Specifies a pixel limitation for the largest side of an image.
	* @param int $maxHeight Specifies a pixel limitation for the height of the image, preserving the aspect ratio if the image needs resizing.
	* @param int $maxWidth Specifies a pixel limitation for the width of the image, preserving the aspect ratio if the image needs resizing.
	* @param int $quality Adjusts the image compression. Accepts values from 0-100, where 100 = highest quality, least compression.
	* @param int $width Specifies an exact width dimension for the image, in pixels.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function transformDocumentContentAsync($documentListName, $documentId, $width =  null, $height =  null, $max =  null, $maxWidth =  null, $maxHeight =  null, $crop =  null, $quality =  null)
	{
		$mozuClient = DocumentClient::transformDocumentContentClient($documentListName, $documentId, $width, $height, $max, $maxWidth, $maxHeight, $crop, $quality);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves a document within the specified document list.
	*
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
	* @param bool $includeInactive Include inactive content.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Document 
	* @deprecated deprecated since version 1.17
	*/
	public function getDocument($documentListName, $documentId, $includeInactive =  null, $responseFields =  null)
	{
		$mozuClient = DocumentClient::getDocumentClient($this->dataViewMode, $documentListName, $documentId, $includeInactive, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a document within the specified document list.
	*
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
	* @param bool $includeInactive Include inactive content.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getDocumentAsync($documentListName, $documentId, $includeInactive =  null, $responseFields =  null)
	{
		$mozuClient = DocumentClient::getDocumentClient($this->dataViewMode, $documentListName, $documentId, $includeInactive, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves a collection of documents according to any filter and sort criteria.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param bool $includeInactive Include inactive content.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return DocumentCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getDocuments($documentListName, $filter =  null, $sortBy =  null, $pageSize =  null, $startIndex =  null, $includeInactive =  null, $responseFields =  null)
	{
		$mozuClient = DocumentClient::getDocumentsClient($this->dataViewMode, $documentListName, $filter, $sortBy, $pageSize, $startIndex, $includeInactive, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a collection of documents according to any filter and sort criteria.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param bool $includeInactive Include inactive content.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getDocumentsAsync($documentListName, $filter =  null, $sortBy =  null, $pageSize =  null, $startIndex =  null, $includeInactive =  null, $responseFields =  null)
	{
		$mozuClient = DocumentClient::getDocumentsClient($this->dataViewMode, $documentListName, $filter, $sortBy, $pageSize, $startIndex, $includeInactive, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Creates a new document in an defined document list.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Document $document The document properties that define the content used by the content management system (CMS).
	* @return Document 
	* @deprecated deprecated since version 1.17
	*/
	public function createDocument($document, $documentListName, $responseFields =  null)
	{
		$mozuClient = DocumentClient::createDocumentClient($this->dataViewMode, $document, $documentListName, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Creates a new document in an defined document list.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function createDocumentAsync($document, $documentListName, $responseFields =  null)
	{
		$mozuClient = DocumentClient::createDocumentClient($this->dataViewMode, $document, $documentListName, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates the binary data or content associated with a document, such as a product image or PDF specifications file, by supplying the document ID.
	*
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
	* @param Stream $stream Data stream that delivers information. Used to input and output data.
	* @deprecated deprecated since version 1.17
	*/
	public function updateDocumentContent($stream, $documentListName, $documentId, $contentType= null)
	{
		$mozuClient = DocumentClient::updateDocumentContentClient($stream, $documentListName, $documentId, $contentType);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Updates the binary data or content associated with a document, such as a product image or PDF specifications file, by supplying the document ID.
	*
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateDocumentContentAsync($stream, $documentListName, $documentId, $contentType= null)
	{
		$mozuClient = DocumentClient::updateDocumentContentClient($stream, $documentListName, $documentId, $contentType);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates a document in a document list.
	*
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Document $document The document properties that define the content used by the content management system (CMS).
	* @return Document 
	* @deprecated deprecated since version 1.17
	*/
	public function updateDocument($document, $documentListName, $documentId, $responseFields =  null)
	{
		$mozuClient = DocumentClient::updateDocumentClient($document, $documentListName, $documentId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates a document in a document list.
	*
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateDocumentAsync($document, $documentListName, $documentId, $responseFields =  null)
	{
		$mozuClient = DocumentClient::updateDocumentClient($document, $documentListName, $documentId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes a specific document based on the specified document ID.
	*
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
	* @deprecated deprecated since version 1.17
	*/
	public function deleteDocument($documentListName, $documentId)
	{
		$mozuClient = DocumentClient::deleteDocumentClient($documentListName, $documentId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes a specific document based on the specified document ID.
	*
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteDocumentAsync($documentListName, $documentId)
	{
		$mozuClient = DocumentClient::deleteDocumentClient($documentListName, $documentId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the content associated with a document, such as a product image or PDF specification, by supplying the document ID.
	*
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
	* @deprecated deprecated since version 1.17
	*/
	public function deleteDocumentContent($documentListName, $documentId)
	{
		$mozuClient = DocumentClient::deleteDocumentContentClient($documentListName, $documentId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the content associated with a document, such as a product image or PDF specification, by supplying the document ID.
	*
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteDocumentContentAsync($documentListName, $documentId)
	{
		$mozuClient = DocumentClient::deleteDocumentContentClient($documentListName, $documentId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

