<?php

declare(strict_types=1);

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private ?KernelBrowser $client;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct(/*private readonly KernelInterface $kernel*/)
    {
//        $this->client = $this->kernel->getContainer()->get('test.client');
    }

//    /**
//     * @When I send :method request to :url with body:
//     */
//    public function iSendRequestToWithBody(string $method, string $url, PyStringNode $string): void
//    {
//        $this->client->j
//
//        throw new PendingException();
//    }
//
//    /**
//     * @Then status code should be :statusCode
//     */
//    public function statusCodeShouldBe(string $statusCode): void
//    {
//        throw new PendingException();
//    }
}
