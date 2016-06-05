Feature: Greeting
    In order to see a "thank you" message
    As a website user
    I need to see thankyou when i click on registerl
 
    Scenario: Name and Register on the home page
        Given I am on "/"
        Then I fill in "name" with "a"
        And I fill in "email" with "a@1"
        And I press "register"
        Then I should see "thank you"
