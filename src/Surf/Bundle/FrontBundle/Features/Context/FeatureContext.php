<?php

namespace Surf\Bundle\FrontBundle\Features\Context;

use AppKernel;
use PHPUnit_Framework_Assert;
use Symfony\Component\HttpKernel\KernelInterface;
use Behat\Symfony2Extension\Context\KernelAwareInterface;
use Behat\MinkExtension\Context\MinkContext;

use Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

/**
 * Feature context.
 */
class FeatureContext extends BehatContext //MinkContext if you want to test web
                  implements KernelAwareInterface
{
    /**
     * @var AppKernel
     */
    private $kernel;

    /**
     * @var array
     */
    private $parameters;

    /**
     * @var string
     */
    private $fileContents;

    /**
     * @var array
     */
    private $section;

    /**
     * Initializes context with parameters from behat.yml.
     *
     * @param array $parameters
     */
    public function __construct(array $parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * Sets HttpKernel instance.
     * This method will be automatically called by Symfony2Extension ContextInitializer.
     *
     * @param KernelInterface $kernel
     */
    public function setKernel(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }

    /**
     * @Given /^I inspect the "([^"]*)" file$/
     */
    public function iInspectTheFile($filePath)
    {
        $this->fileContents = file_get_contents($this->kernel->getContainer()->getParameter('kernel.root_dir') . '/../' . $filePath);
    }

    /**
     * @When /^I check the keys in the "([^"]*)" key$/
     */
    public function iCheckTheKeysInTheKey($section)
    {
        $content = json_decode($this->fileContents);

        PHPUnit_Framework_Assert::assertObjectHasAttribute($section, $content);

        $this->section = $content->$section;
    }

    /**
     * @Then /^the key "([^"]*)" with the value "([^"]*)" should be present$/
     */
    public function theKeyWithTheValueShouldBePresent($key, $value)
    {
        PHPUnit_Framework_Assert::assertObjectHasAttribute($key, $this->section);
        PHPUnit_Framework_Assert::assertEquals($value, $this->section->$key);
    }
}
