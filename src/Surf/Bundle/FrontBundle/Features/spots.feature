Feature: Spots
  In order to provide a good board rental service
  As a board rental service
  I need a way to let the users search for surf spots

  Scenario: Spots listing
    Given I am on the homepage
    When I follow "Spots"
    Then I should see 10 ".spot" elements