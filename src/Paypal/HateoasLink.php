<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 16.01.2019
 * Time: 14:57
 */

namespace Sawit\PaypalBundle\Paypal;


class HateoasLink
{
  /**
   * @var string
   * The target URL.
   * The href element contains the complete target URL, or link, to use in combination with the HTTP method to make
   * the related call. href is the key HATEOAS component that links a completed call with a subsequent call.
   * required
   */
  public $href;

  /**
   * @var string
   * The link relationship type.
   * The rel element contains the link relationship type, or how the href link relates to the previous call.
   * @see https://www.iana.org/assignments/link-relations/link-relations.xhtml#link-relations-1
   * required
   */
  public $rel;

  /**
   * @var string
   * The method element contains an HTTP method. If present, use this method to make a request to the target URL.
   * If absent, the default method is GET.
   * The HTTP methods are:
   *  * DELETE	Deletes a resource.
   *  * GET	Shows details for a resource or lists resources.
   *  * PATCH	Partially updates a resource.
   *  * POST	Creates or manages a resource.
   *  * PUT	Updates a resource.
   *  * REDIRECT	Not an HTTP method but specifies that the target URL is a redirect URL to which to redirect payers to approve a PayPal account payment.
   */
  public $method;
}
