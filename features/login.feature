#language: en

Business Need: As a user I want to login to system
  Scenario: I want to login into the system
    When I send "POST" request to "/login" with body:
    """
    {
      username: "fenix"
      password: "fenix"
    }
    """
    Then status code should be "200"
