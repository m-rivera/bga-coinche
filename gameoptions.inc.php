<?php

/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * BeloteCoinche implementation : © <Your name here> <Your email address here>
 *
 * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
 * See http://en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 *
 * gameoptions.inc.php
 *
 * BeloteCoinche game options description
 *
 * In this file, you can define your game options (= game variants).
 *
 * Note: If your game has no variant, you don't have to modify this file.
 *
 * Note²: All options defined in this file should have a corresponding "game state labels"
 *        with the same ID (see "initGameStateLabels" in belotecoinche.game.php)
 *
 * !! It is not a good idea to modify this file when a game is running !!
 *
 */

$game_options = [
	100 => [
		'name' => totranslate('Game length'),
		'values' => [
			1 => ['name' => totranslate('Classic (2000 points)')],
			2 => ['name' => totranslate('Half-game (1000 points)')],
		],
	],
	101 => [
		'name' => totranslate('Score type'),
		'values' => [
			1 => ['name' => totranslate('Points + Bid')],
			2 => ['name' => totranslate('Bid only')],
		],
	],
	102 => [
		'name' => totranslate('Teams'),
		'values' => [
			1 => [
				'name' => totranslate('By table order (1rst/3rd versus 2nd/4th)'),
			],
			2 => [
				'name' => totranslate('By table order (1rst/2nd versus 3rd/4th)'),
			],
			3 => [
				'name' => totranslate('By table order (1rst/4th versus 2nd/3rd)'),
			],
			4 => ['name' => totranslate('At random')],
		],
		'default' => 1,
	],

	/*

    // note: game variant ID should start at 100 (ie: 100, 101, 102, ...). The maximum is 199.
    100 => array(
                'name' => totranslate('my game option'),
                'values' => array(

                            // A simple value for this option:
                            1 => array( 'name' => totranslate('option 1') )

                            // A simple value for this option.
                            // If this value is chosen, the value of "tmdisplay" is displayed in the game lobby
                            2 => array( 'name' => totranslate('option 2'), 'tmdisplay' => totranslate('option 2') ),

                            // Another value, with other options:
                            //  description => this text will be displayed underneath the option when this value is selected to explain what it does
                            //  beta=true => this option is in beta version right now.
                            //  nobeginner=true  =>  this option is not recommended for beginners
                            3 => array( 'name' => totranslate('option 3'), 'description' => totranslate('this option does X'), 'beta' => true, 'nobeginner' => true )
                        )
            )

    */
];
