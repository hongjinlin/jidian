# Features/Pi1/Misc/2Forms.feature
@Pi1 @Pi1Misc @Pi1MiscTemplatePaths @Pi1MiscTemplatePathsTemplateRootPath
Feature: Original

  Scenario: Check if templateRootPath will work
    Given I am on "/index.php?id=101"
    Then I should see "Vorname"
    Then I should see "Nachname"
    Then I should see "E-Mail"
    Then I should see "fileadmin/powermail/rootPath/Templates/Form/Form.html"
    Then I should see "fileadmin/powermail/rootPath/Partials/Form/Input.html"
    When I fill in "tx_powermail_pi1[field][firstname]" with "Harald"
    When I fill in "tx_powermail_pi1[field][lastname]" with "Müller"
    When I fill in "tx_powermail_pi1[field][email]" with "hm@in2code.de"
    And I press "Jetzt Absenden"

    Then I should see "Harald"
    Then I should see "Müller"
    Then I should see "hm@in2code.de"