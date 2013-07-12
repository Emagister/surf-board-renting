Feature: Home page
  In order to engage at first look to the users
  As a surf rental service company
  We should show a good-looking home page

  Scenario: Carrousel
    Given I am on the homepage
    Then I should see 3 ".carousel-inner .item" elements