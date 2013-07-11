Feature: Twitter Bootstrap
  In order to show an appropiate look&feel
  As an internet user
  I must be able to see the twitter bootstrap theme implemented

  Scenario: Twitter Bootstrap throught composer
    Given I inspect the "composer.json" file
    When I check the keys in the "require" key
    Then the key "braincrafted/bootstrap-bundle" with the value "dev-master" should be present