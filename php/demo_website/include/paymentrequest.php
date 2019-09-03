<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 0.9.4
// Source: paymentrequest.proto
//   Date: 2013-04-17 18:43:15

namespace payments {

  class Output extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $amount = 0;
    
    /**  @var string */
    public $script = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'payments.Output');

      // OPTIONAL UINT64 amount = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "amount";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // REQUIRED BYTES script = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "script";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <amount> has a value
     *
     * @return boolean
     */
    public function hasAmount(){
      return $this->_has(1);
    }
    
    /**
     * Clear <amount> value
     *
     * @return \payments\Output
     */
    public function clearAmount(){
      return $this->_clear(1);
    }
    
    /**
     * Get <amount> value
     *
     * @return int
     */
    public function getAmount(){
      return $this->_get(1);
    }
    
    /**
     * Set <amount> value
     *
     * @param int $value
     * @return \payments\Output
     */
    public function setAmount( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <script> has a value
     *
     * @return boolean
     */
    public function hasScript(){
      return $this->_has(2);
    }
    
    /**
     * Clear <script> value
     *
     * @return \payments\Output
     */
    public function clearScript(){
      return $this->_clear(2);
    }
    
    /**
     * Get <script> value
     *
     * @return string
     */
    public function getScript(){
      return $this->_get(2);
    }
    
    /**
     * Set <script> value
     *
     * @param string $value
     * @return \payments\Output
     */
    public function setScript( $value){
      return $this->_set(2, $value);
    }
  }
}

namespace payments {

  class PaymentDetails extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $network = "main";
    
    /**  @var \payments\Output[]  */
    public $outputs = array();
    
    /**  @var int */
    public $time = null;
    
    /**  @var int */
    public $expires = null;
    
    /**  @var string */
    public $memo = null;
    
    /**  @var string */
    public $payment_url = null;
    
    /**  @var string */
    public $merchant_data = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'payments.PaymentDetails');

      // OPTIONAL STRING network = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "network";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = "main";
      $descriptor->addField($f);

      // REPEATED MESSAGE outputs = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "outputs";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\payments\Output';
      $descriptor->addField($f);

      // REQUIRED UINT64 time = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // OPTIONAL UINT64 expires = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "expires";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING memo = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "memo";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING payment_url = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "payment_url";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BYTES merchant_data = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "merchant_data";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <network> has a value
     *
     * @return boolean
     */
    public function hasNetwork(){
      return $this->_has(1);
    }
    
    /**
     * Clear <network> value
     *
     * @return \payments\PaymentDetails
     */
    public function clearNetwork(){
      return $this->_clear(1);
    }
    
    /**
     * Get <network> value
     *
     * @return string
     */
    public function getNetwork(){
      return $this->_get(1);
    }
    
    /**
     * Set <network> value
     *
     * @param string $value
     * @return \payments\PaymentDetails
     */
    public function setNetwork( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <outputs> has a value
     *
     * @return boolean
     */
    public function hasOutputs(){
      return $this->_has(2);
    }
    
    /**
     * Clear <outputs> value
     *
     * @return \payments\PaymentDetails
     */
    public function clearOutputs(){
      return $this->_clear(2);
    }
    
    /**
     * Get <outputs> value
     *
     * @param int $idx
     * @return \payments\Output
     */
    public function getOutputs($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <outputs> value
     *
     * @param \payments\Output $value
     * @return \payments\PaymentDetails
     */
    public function setOutputs(\payments\Output $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <outputs>
     *
     * @return \payments\Output[]
     */
    public function getOutputsList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <outputs>
     *
     * @param \payments\Output $value
     * @return \payments\PaymentDetails
     */
    public function addOutputs(\payments\Output $value){
     return $this->_add(2, $value);
    }
    
    /**
     * Check if <time> has a value
     *
     * @return boolean
     */
    public function hasTime(){
      return $this->_has(3);
    }
    
    /**
     * Clear <time> value
     *
     * @return \payments\PaymentDetails
     */
    public function clearTime(){
      return $this->_clear(3);
    }
    
    /**
     * Get <time> value
     *
     * @return int
     */
    public function getTime(){
      return $this->_get(3);
    }
    
    /**
     * Set <time> value
     *
     * @param int $value
     * @return \payments\PaymentDetails
     */
    public function setTime( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <expires> has a value
     *
     * @return boolean
     */
    public function hasExpires(){
      return $this->_has(4);
    }
    
    /**
     * Clear <expires> value
     *
     * @return \payments\PaymentDetails
     */
    public function clearExpires(){
      return $this->_clear(4);
    }
    
    /**
     * Get <expires> value
     *
     * @return int
     */
    public function getExpires(){
      return $this->_get(4);
    }
    
    /**
     * Set <expires> value
     *
     * @param int $value
     * @return \payments\PaymentDetails
     */
    public function setExpires( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <memo> has a value
     *
     * @return boolean
     */
    public function hasMemo(){
      return $this->_has(5);
    }
    
    /**
     * Clear <memo> value
     *
     * @return \payments\PaymentDetails
     */
    public function clearMemo(){
      return $this->_clear(5);
    }
    
    /**
     * Get <memo> value
     *
     * @return string
     */
    public function getMemo(){
      return $this->_get(5);
    }
    
    /**
     * Set <memo> value
     *
     * @param string $value
     * @return \payments\PaymentDetails
     */
    public function setMemo( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <payment_url> has a value
     *
     * @return boolean
     */
    public function hasPaymentUrl(){
      return $this->_has(6);
    }
    
    /**
     * Clear <payment_url> value
     *
     * @return \payments\PaymentDetails
     */
    public function clearPaymentUrl(){
      return $this->_clear(6);
    }
    
    /**
     * Get <payment_url> value
     *
     * @return string
     */
    public function getPaymentUrl(){
      return $this->_get(6);
    }
    
    /**
     * Set <payment_url> value
     *
     * @param string $value
     * @return \payments\PaymentDetails
     */
    public function setPaymentUrl( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <merchant_data> has a value
     *
     * @return boolean
     */
    public function hasMerchantData(){
      return $this->_has(7);
    }
    
    /**
     * Clear <merchant_data> value
     *
     * @return \payments\PaymentDetails
     */
    public function clearMerchantData(){
      return $this->_clear(7);
    }
    
    /**
     * Get <merchant_data> value
     *
     * @return string
     */
    public function getMerchantData(){
      return $this->_get(7);
    }
    
    /**
     * Set <merchant_data> value
     *
     * @param string $value
     * @return \payments\PaymentDetails
     */
    public function setMerchantData( $value){
      return $this->_set(7, $value);
    }
  }
}

namespace payments {

  class PaymentRequest extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $payment_details_version = 1;
    
    /**  @var string */
    public $pki_type = "none";
    
    /**  @var string */
    public $pki_data = null;
    
    /**  @var string */
    public $serialized_payment_details = null;
    
    /**  @var string */
    public $signature = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'payments.PaymentRequest');

      // OPTIONAL UINT32 payment_details_version = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "payment_details_version";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 1;
      $descriptor->addField($f);

      // OPTIONAL STRING pki_type = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "pki_type";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = "none";
      $descriptor->addField($f);

      // OPTIONAL BYTES pki_data = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "pki_data";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REQUIRED BYTES serialized_payment_details = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "serialized_payment_details";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // OPTIONAL BYTES signature = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "signature";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <payment_details_version> has a value
     *
     * @return boolean
     */
    public function hasPaymentDetailsVersion(){
      return $this->_has(1);
    }
    
    /**
     * Clear <payment_details_version> value
     *
     * @return \payments\PaymentRequest
     */
    public function clearPaymentDetailsVersion(){
      return $this->_clear(1);
    }
    
    /**
     * Get <payment_details_version> value
     *
     * @return int
     */
    public function getPaymentDetailsVersion(){
      return $this->_get(1);
    }
    
    /**
     * Set <payment_details_version> value
     *
     * @param int $value
     * @return \payments\PaymentRequest
     */
    public function setPaymentDetailsVersion( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <pki_type> has a value
     *
     * @return boolean
     */
    public function hasPkiType(){
      return $this->_has(2);
    }
    
    /**
     * Clear <pki_type> value
     *
     * @return \payments\PaymentRequest
     */
    public function clearPkiType(){
      return $this->_clear(2);
    }
    
    /**
     * Get <pki_type> value
     *
     * @return string
     */
    public function getPkiType(){
      return $this->_get(2);
    }
    
    /**
     * Set <pki_type> value
     *
     * @param string $value
     * @return \payments\PaymentRequest
     */
    public function setPkiType( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <pki_data> has a value
     *
     * @return boolean
     */
    public function hasPkiData(){
      return $this->_has(3);
    }
    
    /**
     * Clear <pki_data> value
     *
     * @return \payments\PaymentRequest
     */
    public function clearPkiData(){
      return $this->_clear(3);
    }
    
    /**
     * Get <pki_data> value
     *
     * @return string
     */
    public function getPkiData(){
      return $this->_get(3);
    }
    
    /**
     * Set <pki_data> value
     *
     * @param string $value
     * @return \payments\PaymentRequest
     */
    public function setPkiData( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <serialized_payment_details> has a value
     *
     * @return boolean
     */
    public function hasSerializedPaymentDetails(){
      return $this->_has(4);
    }
    
    /**
     * Clear <serialized_payment_details> value
     *
     * @return \payments\PaymentRequest
     */
    public function clearSerializedPaymentDetails(){
      return $this->_clear(4);
    }
    
    /**
     * Get <serialized_payment_details> value
     *
     * @return string
     */
    public function getSerializedPaymentDetails(){
      return $this->_get(4);
    }
    
    /**
     * Set <serialized_payment_details> value
     *
     * @param string $value
     * @return \payments\PaymentRequest
     */
    public function setSerializedPaymentDetails( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <signature> has a value
     *
     * @return boolean
     */
    public function hasSignature(){
      return $this->_has(5);
    }
    
    /**
     * Clear <signature> value
     *
     * @return \payments\PaymentRequest
     */
    public function clearSignature(){
      return $this->_clear(5);
    }
    
    /**
     * Get <signature> value
     *
     * @return string
     */
    public function getSignature(){
      return $this->_get(5);
    }
    
    /**
     * Set <signature> value
     *
     * @param string $value
     * @return \payments\PaymentRequest
     */
    public function setSignature( $value){
      return $this->_set(5, $value);
    }
  }
}

namespace payments {

  class X509Certificates extends \DrSlump\Protobuf\Message {

    /**  @var string[]  */
    public $certificate = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'payments.X509Certificates');

      // REPEATED BYTES certificate = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "certificate";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <certificate> has a value
     *
     * @return boolean
     */
    public function hasCertificate(){
      return $this->_has(1);
    }
    
    /**
     * Clear <certificate> value
     *
     * @return \payments\X509Certificates
     */
    public function clearCertificate(){
      return $this->_clear(1);
    }
    
    /**
     * Get <certificate> value
     *
     * @param int $idx
     * @return string
     */
    public function getCertificate($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <certificate> value
     *
     * @param string $value
     * @return \payments\X509Certificates
     */
    public function setCertificate( $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <certificate>
     *
     * @return string[]
     */
    public function getCertificateList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <certificate>
     *
     * @param string $value
     * @return \payments\X509Certificates
     */
    public function addCertificate( $value){
     return $this->_add(1, $value);
    }
  }
}

namespace payments {

  class Payment extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $merchant_data = null;
    
    /**  @var string[]  */
    public $transactions = array();
    
    /**  @var \payments\Output[]  */
    public $refund_to = array();
    
    /**  @var string */
    public $memo = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'payments.Payment');

      // OPTIONAL BYTES merchant_data = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "merchant_data";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED BYTES transactions = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "transactions";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // REPEATED MESSAGE refund_to = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "refund_to";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\payments\Output';
      $descriptor->addField($f);

      // OPTIONAL STRING memo = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "memo";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <merchant_data> has a value
     *
     * @return boolean
     */
    public function hasMerchantData(){
      return $this->_has(1);
    }
    
    /**
     * Clear <merchant_data> value
     *
     * @return \payments\Payment
     */
    public function clearMerchantData(){
      return $this->_clear(1);
    }
    
    /**
     * Get <merchant_data> value
     *
     * @return string
     */
    public function getMerchantData(){
      return $this->_get(1);
    }
    
    /**
     * Set <merchant_data> value
     *
     * @param string $value
     * @return \payments\Payment
     */
    public function setMerchantData( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <transactions> has a value
     *
     * @return boolean
     */
    public function hasTransactions(){
      return $this->_has(2);
    }
    
    /**
     * Clear <transactions> value
     *
     * @return \payments\Payment
     */
    public function clearTransactions(){
      return $this->_clear(2);
    }
    
    /**
     * Get <transactions> value
     *
     * @param int $idx
     * @return string
     */
    public function getTransactions($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <transactions> value
     *
     * @param string $value
     * @return \payments\Payment
     */
    public function setTransactions( $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <transactions>
     *
     * @return string[]
     */
    public function getTransactionsList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <transactions>
     *
     * @param string $value
     * @return \payments\Payment
     */
    public function addTransactions( $value){
     return $this->_add(2, $value);
    }
    
    /**
     * Check if <refund_to> has a value
     *
     * @return boolean
     */
    public function hasRefundTo(){
      return $this->_has(3);
    }
    
    /**
     * Clear <refund_to> value
     *
     * @return \payments\Payment
     */
    public function clearRefundTo(){
      return $this->_clear(3);
    }
    
    /**
     * Get <refund_to> value
     *
     * @param int $idx
     * @return \payments\Output
     */
    public function getRefundTo($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <refund_to> value
     *
     * @param \payments\Output $value
     * @return \payments\Payment
     */
    public function setRefundTo(\payments\Output $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <refund_to>
     *
     * @return \payments\Output[]
     */
    public function getRefundToList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <refund_to>
     *
     * @param \payments\Output $value
     * @return \payments\Payment
     */
    public function addRefundTo(\payments\Output $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <memo> has a value
     *
     * @return boolean
     */
    public function hasMemo(){
      return $this->_has(4);
    }
    
    /**
     * Clear <memo> value
     *
     * @return \payments\Payment
     */
    public function clearMemo(){
      return $this->_clear(4);
    }
    
    /**
     * Get <memo> value
     *
     * @return string
     */
    public function getMemo(){
      return $this->_get(4);
    }
    
    /**
     * Set <memo> value
     *
     * @param string $value
     * @return \payments\Payment
     */
    public function setMemo( $value){
      return $this->_set(4, $value);
    }
  }
}

namespace payments {

  class PaymentACK extends \DrSlump\Protobuf\Message {

    /**  @var \payments\Payment */
    public $payment = null;
    
    /**  @var string */
    public $memo = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'payments.PaymentACK');

      // REQUIRED MESSAGE payment = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "payment";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->reference = '\payments\Payment';
      $descriptor->addField($f);

      // OPTIONAL STRING memo = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "memo";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <payment> has a value
     *
     * @return boolean
     */
    public function hasPayment(){
      return $this->_has(1);
    }
    
    /**
     * Clear <payment> value
     *
     * @return \payments\PaymentACK
     */
    public function clearPayment(){
      return $this->_clear(1);
    }
    
    /**
     * Get <payment> value
     *
     * @return \payments\Payment
     */
    public function getPayment(){
      return $this->_get(1);
    }
    
    /**
     * Set <payment> value
     *
     * @param \payments\Payment $value
     * @return \payments\PaymentACK
     */
    public function setPayment(\payments\Payment $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <memo> has a value
     *
     * @return boolean
     */
    public function hasMemo(){
      return $this->_has(2);
    }
    
    /**
     * Clear <memo> value
     *
     * @return \payments\PaymentACK
     */
    public function clearMemo(){
      return $this->_clear(2);
    }
    
    /**
     * Get <memo> value
     *
     * @return string
     */
    public function getMemo(){
      return $this->_get(2);
    }
    
    /**
     * Set <memo> value
     *
     * @param string $value
     * @return \payments\PaymentACK
     */
    public function setMemo( $value){
      return $this->_set(2, $value);
    }
  }
}

