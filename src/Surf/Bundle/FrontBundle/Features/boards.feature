Feature: Boards
  In order to provide a good board rental service
  As a board rental service
  I need a way to let the users interact with the boards I have available

  Scenario: Boards listing
    Given I am on the homepage
    When I follow "Boards"
    Then I should see 10 ".board" elements