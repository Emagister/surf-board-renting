Feature: Spots
  In order to provide a good board rental service
  As a board rental service
  I need a way to store rider profiles

  Scenario: Riders listing
    Given I am on the homepage
    When I follow "Riders"
    Then I should see 10 ".rider" elements