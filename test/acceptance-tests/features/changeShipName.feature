# features/changeShipName.feature
Feature: Change Ship Name

Scenario: change a ship name should also change cruise name
	Given that I have a cruise with name "Royal"
	And that the cruise is served by a ship named "Sovereign"
	Then the cruise name should be "Royal - Sovereign"
	When I change the ship name to "Mojon"
	Then the cruise name should be "Royal - Mojon"