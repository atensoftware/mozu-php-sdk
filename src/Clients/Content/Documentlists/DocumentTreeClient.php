<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Content\Documentlists;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Content\Documentlists\DocumentTreeUrl;

use Mozu\Api\Headers;

/**
* Use the document tree subresource to retrieve documents and manage content within the document hierarchy.
*/
class DocumentTreeClient {

	/**
	* Retrieve the content associated with the document, such as a product image or PDF specifications file.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $documentName The name of the document in the site.
	* @return MozuClient
	*/
	public static function getTreeDocumentContentClient($dataViewMode, $documentListName, $documentName)
	{
		$url = DocumentTreeUrl::getTreeDocumentContentUrl($documentListName, $documentName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Performs transformations on a document. For example, resizing an image.
	*
	* @param string $crop Crops the image based on the specified coordinates. The reference point for positive coordinates is the top-left corner of the image, and the reference point for negative coordinates is the bottom-right corner of the image.Usage: Example:  removes 10 pixels from all edges of the image.  leaves the image uncropped.
	* @param string $documentListName Name of content documentListName to delete
	* @param string $documentName The name of the document in the site.
	* @param int $height Specifies an exact height dimension for the image, in pixels.
	* @param int $max Specifies a pixel limitation for the largest side of an image.
	* @param int $maxHeight Specifies a pixel limitation for the height of the image, preserving the aspect ratio if the image needs resizing.
	* @param int $maxWidth Specifies a pixel limitation for the width of the image, preserving the aspect ratio if the image needs resizing.
	* @param int $quality Adjusts the image compression. Accepts values from 0-100, where 100 = highest quality, least compression.
	* @param int $width Specifies an exact width dimension for the image, in pixels.
	* @return MozuClient
	*/
	public static function transformTreeDocumentContentClient($documentListName, $documentName, $width =  null, $height =  null, $max =  null, $maxWidth =  null, $maxHeight =  null, $crop =  null, $quality =  null)
	{
		$url = DocumentTreeUrl::transformTreeDocumentContentUrl($crop, $documentListName, $documentName, $height, $max, $maxHeight, $maxWidth, $quality, $width);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a document based on its document list and folder path in the document hierarchy.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $documentName The name of the document in the site.
	* @param bool $includeInactive Include inactive content.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getTreeDocumentClient($dataViewMode, $documentListName, $documentName, $includeInactive =  null, $responseFields =  null)
	{
		$url = DocumentTreeUrl::getTreeDocumentUrl($documentListName, $documentName, $includeInactive, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Updates the binary data or content associated with a document, such as a product image or PDF specifications file, by supplying the document name.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $documentName The name of the document in the site.
	* @param Stream $stream Data stream that delivers information. Used to input and output data.
	*/
	public static function updateTreeDocumentContentClient($stream, $documentListName, $documentName, $contentType= null)
	{
		$url = DocumentTreeUrl::updateTreeDocumentContentUrl($documentListName, $documentName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withStreamBody($stream)->withHeader(Headers::CONTENT_TYPE ,$contentType);
		return $mozuClient;

	}
	
	/**
	* Deletes the content associated with a document, such as a product image or PDF specifications file.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $documentName The name of the document in the site.
	* @param Stream $stream Data stream that delivers information. Used to input and output data.
	*/
	public static function deleteTreeDocumentContentClient($stream, $documentListName, $documentName, $contentType= null)
	{
		$url = DocumentTreeUrl::deleteTreeDocumentContentUrl($documentListName, $documentName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withStreamBody($stream)->withHeader(Headers::CONTENT_TYPE ,$contentType);
		return $mozuClient;

	}
	
	
}

?>

