<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException,
    Behat\Behat\Context\Step;

use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext
{
    function __construct()
    {
    }

    /**
     * @Given /^has cookie "([^"]*)" "([^"]*)"$/
     * @And /^has cookie "([^"]*)" "([^"]*)"$/
     */
    public function setTempCookie($name, $value)
    {
        $session = $this->getSession();
        $session->setCookie($name, $value);
    }

    /**
     * @Then /^print cookie "(.*)"$/
     * @And /^print cookie "(.*)"$/
     */
    public function printCookie($cookie)
    {
        $this->printDebug("cookie.$cookie = ".($this->getSession()->getCookie($cookie))."\n");
    }
}
