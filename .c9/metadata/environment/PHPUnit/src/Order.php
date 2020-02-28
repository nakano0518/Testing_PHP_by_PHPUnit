{"filter":false,"title":"Order.php","tooltip":"/PHPUnit/src/Order.php","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":0,"column":0},"end":{"row":42,"column":0},"action":"insert","lines":["<?php","","/**"," * Order"," *"," * An example order class"," */","class Order","{","","    /**","     * Amount","     * @var int","     */","    public $amount = 0;","","    /**","     * Payment gateway dependency","     * @var PaymentGateway","     */","    protected $gateway;","","    /**","     * Constructor","     *","     * @return void","     */","    public function __construct(PaymentGateway $gateway)","    {","        $this->gateway = $gateway;","    }","","    /**","     * Process the order","     *","     * @return boolean","     */","    public function process()","    {","        return $this->gateway->charge($this->amount);","    }","}",""],"id":1}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":2,"column":0},"end":{"row":3,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":34},"action":"insert","lines":["//依存関係が存在する「前に」クラスを記述してテストしたい場合がある"],"id":3}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "],"id":4}],[{"start":{"row":11,"column":4},"end":{"row":22,"column":0},"action":"insert","lines":["/**","     * Quantity","     * @var int","     */","    public $quantity;","","    /**","     * Unit price","     * @var float","     */","    public $unit_price;",""],"id":5}],[{"start":{"row":11,"column":4},"end":{"row":22,"column":0},"action":"remove","lines":["/**","     * Quantity","     * @var int","     */","    public $quantity;","","    /**","     * Unit price","     * @var float","     */","    public $unit_price;",""],"id":6}]]},"ace":{"folds":[],"scrolltop":85.5,"scrollleft":0,"selection":{"start":{"row":11,"column":4},"end":{"row":11,"column":4},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":4,"state":"php-doc-start","mode":"ace/mode/php"}},"timestamp":1582867616275,"hash":"a0620e296511f73b143551c58bf4b36711e1da48"}