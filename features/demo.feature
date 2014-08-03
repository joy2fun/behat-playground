Feature: Hello world

    Background:
        Given has cookie "username" "hellouser"
        # Something like "Given a user named "username"" would be better
        # This setting should be performed by hooks

    Scenario Outline: testing error
        Given I am on "<url>"
        Then I should see "admin"
        And the response should not contain "anything about me"

        Examples:
            |url|
            |/?a=admin|

    Scenario: Visit test
        Given I am on "/test.html"
        Then I should see a "title" element
        And print cookie "username"
