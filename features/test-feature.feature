Feature: Test Behat with Sahi
    As a developer
    I want to see behat work with sahi
    So I can test my javascript web application, like a pro

Scenario: Go to my blog and check something static
    Given I am on "/"
    Then I should see "{never stop building}"

@javascript
Scenario: got to my blog and click on the side bar toggle
    Given I am on "/"
    When I click on the ".toggle-sidebar" element
    Then the sidebar should be collapsed
