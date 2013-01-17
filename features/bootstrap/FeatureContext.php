<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

use Behat\MinkExtension\Context\MinkContext;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends MinkContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    /**
     * @When /^I click on the "([^"]*)" element$/
     */
    public function iClickOnTheElement($cssQuery)
    {
        $session = $this->getSession();
        $page = $session->getPage();
        $element = $page->find('css', $cssQuery);
        $element->click();
    }

    /**
     * @Then /^the sidebar should be collapsed$/
     */
    public function theSidebarShouldBeCollapsed()
    {
        $session = $this->getSession();
        $page = $session->getPage();
        $element = $page->find('css', "body");
        $class = $element->getAttribute("class");
        if ($class != "collapse-sidebar") {
            throw new \Exception('Side bar is not collapsed!');
        }
    }
}
