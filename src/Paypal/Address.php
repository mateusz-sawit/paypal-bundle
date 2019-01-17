<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 17.01.2019
 * Time: 08:42
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class Address
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments/v1/#definition-address
 */
class Address
{
  /**
   * @var string
   * The first line of the address. For example, number, street, and so on.
   * Maximum length: 100.
   * required
   */
  public $line1;

  /**
   * @var string
   * The second line of the address. For example, suite or apartment number.
   * Maximum length: 100.
   */
  public $line2;

  /**
   * @var string
   * The city name.
   * Maximum length: 64.
   */
  public $city;

  /**
   * @var string
   * The two-character ISO 3166-1 code that identifies the country or region.
   * Note: The country code for Great Britain is GB and not UK as used in the top-level domain names for that country.
   *  Use the C2 country code for China worldwide for comparable uncontrolled price (CUP) method, bank card, and cross-border transactions.
   * Minimum length: 2.
   * Maximum length: 2.
   * Pattern: ^([A-Z]{2}|C2)$.
   * @see https://developer.paypal.com/docs/integration/direct/rest/country-codes/
   */
  public $country_code;

  /**
   * @var string
   * The postal code, which is the zip code or equivalent. Typically required for countries with a postal code or an equivalent.
   * @see https://en.wikipedia.org/wiki/Postal_code
   */
  public $postal_code;

  /**
   * @var string
   * The code for a US state or the equivalent for other countries.
   * Required for transactions if the address is in one of these countries:
   *  Argentina, Brazil, Canada, China, India, Italy, Japan, Mexico, Thailand, or United States.
   * Maximum length is 40 single-byte characters.
   */
  public $state;

  /**
   * @var string
   * The phone number, in E.123 format. Maximum length is 50 characters.
   * @see https://www.itu.int/rec/T-REC-E.123-200102-I/en
   */
  public $phone;

  /**
   * @var string
   * The address normalization status. Returned only for payers from Brazil. The possible values are:
   *  * UNKNOWN. Unknown.
   *  * UNNORMALIZED_USER_PREFERRED. Unnormalized user preferred.
   *  * NORMALIZED. Normalized.
   *  * UNNORMALIZED. Unnormalized.
   */
  // public $normalization_status;

  /**
   * @var string
   * The type of address. For example, HOME_OR_WORK, GIFT, and so on.
   */
  public $type;

}
