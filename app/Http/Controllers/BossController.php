<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BossController extends Controller
{
    /**
     * Show Wrathion
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boss = 'wrathion';

        $assignments = [
            'tank' => 'Set markers around the room',
            'dps' => 'Assign soakers for <a class="text-mechanic" href="https://ptr.wowhead.com/spell=308682/scales-of-wrathion"></a>',
            'healer' => 'Check the healing doc for proper healing assignments'
        ];
        $phaseOne = [
            'tank' => [
                'PHASE 1',
                'notes' => [
                    'Keep head <a class="text-mechanic" href="https://ptr.wowhead.com/spell=305978/searing-breath"></a> and tail <a class="text-mechanic" href="https://ptr.wowhead.com/spell=307974/tail-swipe"></a> pointed away from raid (use markers for phase transitions to help with positioning)',
                    'Taunt on 2-3 stacks of <a class="text-mechanic" href="https://ptr.wowhead.com/spell=306015/searing-armor"></a>',
                    'Run with group to safe spots to avoid <a class="text-mechanic" href="https://ptr.wowhead.com/spell=306735/burning-cataclysm"></a>',
                    'After <a class="text-mechanic" href="https://ptr.wowhead.com/spell=306735/burning-cataclysm"></a> and <a class="text-mechanic" href="https://ptr.wowhead.com/spell=306794/molten-eruption"></a> are done, quickly position boss in middle of room and away from raid (again, use markers)'
                ],
            ],
            'dps' => [
                'PHASE 1',
                'notes' => [
                    'Always stand on side of boss during phase 1',
                    'Watch for <a class="text-mechanic" href="https://ptr.wowhead.com/spell=306111/incineration"></a> cast and move out 20-30 yards to avoid raid damage',
                    'Move away from boss during <a class="text-mechanic" href="https://ptr.wowhead.com/spell=306289/gale-blast"></a> and spread 5 yards apart'
                ],
            ],
            'healer' => [
                'PHASE 1',
                'notes' => [
                    'Always stand on side of boss during phase 1',
                    'Watch for <a class="text-mechanic" href="https://ptr.wowhead.com/spell=306111/incineration"></a> cast and move out 20-30 yards to avoid raid damage',
                    'Move away from boss during <a class="text-mechanic" href="https://ptr.wowhead.com/spell=306289/gale-blast"></a> and spread 5 yards apart'
                ],
            ],
        ];
        $phaseTwo = [
            'tank' => [
                'PHASE 2',
                'notes' => [
                    'Help find <a class="text-mechanic" href="https://ptr.wowhead.com/npc=160291/ashwalker-assassin"></a> quickly with AOE and stealth remove abilities and dps down pillars',
                    'At the end of phase 2, be sure to position boss quick to avoid frontals on raid (use markers)'
                ],
            ],
            'dps' => [
                'PHASE 2',
                'notes' => [
                    'Help find <a class="text-mechanic" href="https://ptr.wowhead.com/npc=160291/ashwalker-assassin"></a> quickly with AOE and stealth remove abilities and dps down <a class="text-mechanic" href="https://ptr.wowhead.com/npc=158327/crackling-shard"></a> pillars',
                    'If you are assigned a <a class="text-mechanic" href="https://ptr.wowhead.com/spell=308682/scales-of-wrathion"></a> soak and <a class="text-mechanic" href="https://ptr.wowhead.com/npc=158327/crackling-shard"></a> clear, be quick and get as many as possible'
                ],
            ],
            'healer' => [
                'PHASE 2',
                'notes' => [
                    'Help find <a class="text-mechanic" href="https://ptr.wowhead.com/npc=160291/ashwalker-assassin"></a> quickly with AOE and stealth remove abilities and help dps down <a class="text-mechanic" href="https://ptr.wowhead.com/npc=158327/crackling-shard"></a> pillars'
                ],
            ],
        ];
        $mythic = [
            'Watch <a class="text-mechanic" href="https://ptr.wowhead.com/spell=313250/creeping-madness"></a> debuff (it stacks!). You can try to drop it by not moving for 45 seconds. Debuff can be removed also (freedom, etc)',
            '<a class="text-mechanic" href="https://ptr.wowhead.com/spell=307013/burning-madness"></a> only removes the <a class="text-mechanic" href="https://ptr.wowhead.com/spell=313175/hardened-core"></a> debuff, all pillars must be dpsed down now',
            'Some of the pillars/fire patches will remain (this is the psuedo enrage)'
        ];

        return view('boss', compact('boss', 'assignments', 'phaseOne', 'phaseTwo', 'mythic'));
    }

    /**
     * Show all pages
     *
     * @return \Illuminate\Http\Response
     */
    public function bosses(Request $request)
    {
        $bosses = [
            'wrathion',
            'maut',
            'skitra',
            'inquisitor',
            'hivemind',
            'shad-har',
            'drest-agath',
            'il-gynoth',
            'vexiona',
            'ra-den',
            'carapace',
            'n-zoth',
        ];

        if(in_array($request['boss'], $bosses) || empty($request)) {

            $boss = $request['boss'];

            // Maut
            if($boss == 'maut') {
                $assignments = [
                    'tank' => 'Set Diamond Marker for first void zone drops',
                    'dps' => 'Mark somebody or right on  back of boss for phase 2 stack',
                    'healer' => 'Stand with ranged or melee'
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [
                            'Move boss clockwise around the room',
                            'Taunt when <a class="text-mechanic" href="https://ptr.wowhead.com/spell=307399/shadow-wounds"></a> reset (usually 2-4 stacks)',
                            'Step in <a class="text-mechanic" href="https://ptr.wowhead.com/spell=307839/devoured-abyss"></a> before <a class="text-mechanic" href="https://ptr.wowhead.com/spell=308044/stygian-annihilation"></a> cast is finished',
                            'Taunt <a class="text-mechanic" href="https://ptr.wowhead.com/npc=156650/dark-manifestation"></a> add when it spawns and keep 20 yards away',
                            'Move <a class="text-mechanic" href="https://ptr.wowhead.com/npc=156650/dark-manifestation"></a> near void zone, move INTO void zone to stop the <a class="text-mechanic" href="https://ptr.wowhead.com/spell=308872/dark-offering"></a> cast, move back out'
                        ],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [
                            'Melee stand on side of boss (to bait <a class="text-mechanic" href="https://ptr.wowhead.com/spell=305663/black-wings"></a>) and ranged will stand behind/middle of room',
                            'Get out with <a class="text-mechanic" href="https://ptr.wowhead.com/spell=307805/devour-magic"></a> and drop it near other void zones, to keep the room clean',
                            'Kill <a class="text-mechanic" href="https://ptr.wowhead.com/npc=156650/dark-manifestation"></a> as quick as possible',
                            'Step in <a class="text-mechanic" href="https://ptr.wowhead.com/spell=307839/devoured-abyss"></a> before <a class="text-mechanic" href="https://ptr.wowhead.com/spell=308044/stygian-annihilation"></a> cast is finished',
                        ],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [
                            'Be aware of Maut mana, as the more mana gained, the more damage done (end of phase 1 will be a lot more damage)',
                            'Get out with <a class="text-mechanic" href="https://ptr.wowhead.com/spell=307805/devour-magic"></a> and drop it near other void zones, to keep the room clean',
                            'Step in <a class="text-mechanic" href="https://ptr.wowhead.com/spell=307839/devoured-abyss"></a> before <a class="text-mechanic" href="https://ptr.wowhead.com/spell=308044/stygian-annihilation"></a> cast is finished'
                        ],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [
                            'Soak balls and bring to group to help with <a class="text-mechanic" href="https://ptr.wowhead.com/spell=306301/forbidden-mana"></a> buff'
                        ],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [
                            'Kill boss before he gains too many <a class="text-mechanic" href="https://ptr.wowhead.com/spell=306387/consumed-magic"></a> stacks',
                            'Mobile DPS help with ball soaks to help with <a class="text-mechanic" href="https://ptr.wowhead.com/spell=306301/forbidden-mana"></a> buff',
                            'Move out with <a class="text-mechanic" href="https://ptr.wowhead.com/spell=314992/drain-essence"></a> or get dispelled quickly (we will see how this works out in real time)',
                        ],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [
                            'Get mana from <a class="text-mechanic" href="https://ptr.wowhead.com/spell=306301/forbidden-mana"></a>',
                            'Dispels on heroic can likely be done quickly, just watch raid health. Mythic will likely require more control on dispels'
                        ],
                    ],
                ];
                $mythic = [
                    'Ancient Curse (may have to run into the devoured abyss prior to this finishing casting TBD)',
                    'Plan on dipping in void zones to dispel, manual dispels on tanks + some melee'
                ];
            }

            // skitra
            if($boss == 'skitra') {
                $assignments = [
                    'tank' => 'One tank sets markers for phase 2 on each add and we match the other side',
                    'dps' => 'Stack with group',
                    'healer' => 'Stack with group'
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [
                            '-Taunt swap when <a class="text-mechanic" href="https://www.wowhead.com/spell=307977/shadow-shock"></a> times out (usually 4-6 stacks)',
                            'Help cc <a class="text-mechanic" href="https://www.wowhead.com/npc=160990/image-of-absolution"></a>',
                            'Try to enter phase 2 with no <a class="text-mechanic" href="https://www.wowhead.com/spell=307937/shred-psyche"></a> adds up'
                        ],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [
                            'Help cc <a class="text-mechanic" href="https://www.wowhead.com/npc=160990/image-of-absolution"></a>',
                            'Move away from raid with <a class="text-mechanic" href="https://www.wowhead.com/spell=307937/shred-psyche"></a> less damage further out',
                            'Once add spawns stay away until <a class="text-mechanic" href="https://www.wowhead.com/spell=309687/psychic-outburst"></a> until it finishes cast. Add should die asap.',
                            'Try to enter phase 2 with no <a class="text-mechanic" href="https://www.wowhead.com/spell=307937/shred-psyche"></a> adds up'
                        ],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [
                            'Help cc <a class="text-mechanic" href="https://www.wowhead.com/npc=160990/image-of-absolution"></a>',
                            'Set up raid DRs for <a class="text-mechanic" href="https://www.wowhead.com/spell=309687/psychic-outburst"></a>??'
                        ],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [
                            'Help find which boss illusion is shared',
                            'Kill the identified shared boss illusion',
                            'Stack near illusion add being killed to help healers with incoming damage from <a class="text-mechanic" href="https://www.wowhead.com/spell=309652/illusionary-bolt"></a>'
                        ],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [
                            'Kill the identified shared boss illusion',
                            'Stack near illusion add being killed to help healers with incoming damage from <a class="text-mechanic" href="https://www.wowhead.com/spell=309652/illusionary-bolt"></a>'
                        ],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [
                            'Kill the identified shared boss illusion',
                            'Stack near illusion add being killed to help healers with incoming damage from <a class="text-mechanic" href="https://www.wowhead.com/spell=309652/illusionary-bolt"></a>'
                        ],
                    ],
                ];
                $mythic = [
                    'Everyone is assigned either <a class="text-mechanic" href="https://www.wowhead.com/spell=307785/twisted-mind"></a> or <a class="text-mechanic" href="https://www.wowhead.com/spell=307784/clouded-mind"></a> debuffs',
                    'Players can only see adds related to their respective debuffs',
                    'Everyone can still be damaged by <a class="text-mechanic" href="https://www.wowhead.com/spell=309687/psychic-outburst"></a> and <a class="text-mechanic" href="https://www.wowhead.com/spell=312741/psychic-reverberations"></a>',
                    'Switching to adds and killing them is much more important due to fewer players in each realm',
                    '<a class="text-mechanic" href="https://www.wowhead.com/npc=160990/image-of-absolution"></a> are also assigned different realm debuffs, so communication is necessary to help with walls coming into raid group',
                    'At the beginning of each phase two, realm debuffs will be reassigned (you CAN get the same one again)'
                ];
            }

            // inquisitor
            if($boss == 'inquisitor') {
                $assignments = [
                    'tank' => 'Mark tanks',
                    'dps' => 'Assign soccer player rotations, groups of 3 for <a class="text-mechanic" href="https://www.wowhead.com/spell=312336/void-ritual"></a> (Heroic only)',
                    'healer' => '---'
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [
                            'Taunt after each <a class="text-mechanic" href="https://www.wowhead.com/spell=311551/abyssal-strike"></a>',
                            'Move out of <a class="text-mechanic" href="https://www.wowhead.com/spell=311383/torment"></a> zones',
                            'Make sure to not get knocked off the edge when <a class="text-mechanic" href="https://www.wowhead.com/spell=311551/abyssal-strike"></a> happens',
                            'Do not jump off the edge, you will die!',
                            'Move away from shadow soul <a class="text-mechanic" href="https://www.wowhead.com/spell=306228/soul-flay"></a> to reduce damage when it explodes'
                        ],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [
                            'Move out of <a class="text-mechanic" href="https://www.wowhead.com/spell=311383/torment"></a> zones',
                            'Do soccer with the <a class="text-mechanic" href="https://www.wowhead.com/spell=314202/void-orb"></a> (Note: the orb will move directions when it hits the EDGE of your character, not the middle of your character. Also note: the orb moves in the direction you are facing)',
                            'Avoid letting <a class="text-mechanic" href="https://www.wowhead.com/spell=314202/void-orb"></a> touch any walls (middle, outside, obelisks)',
                            'Do not jump off the edge, you will die!',
                            'Move away from shadow soul <a class="text-mechanic" href="https://www.wowhead.com/spell=306228/soul-flay"></a> to reduce damage when it explodes'
                        ],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [
                            'Move out of <a class="text-mechanic" href="https://www.wowhead.com/spell=311383/torment"></a> zones',
                            'Do not jump off the edge, you will die!',
                            'Move away from shadow soul <a class="text-mechanic" href="https://www.wowhead.com/spell=306228/soul-flay"></a> to reduce damage when it explodes'
                        ],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                ];
                $mythic = [
                    '<a class="text-mechanic" href="https://www.wowhead.com/spell=313198/void-touched"></a> debuff is now permanent after controlling the orb with <a class="text-mechanic" href="https://www.wowhead.com/spell=312406/voidwoken"></a>',
                    '<a class="text-mechanic" href="https://www.wowhead.com/spell=314298/imminent-doom"></a> will instantly kill after touching the orb 3 times (down from 5 on heroic)',
                    '<a class="text-mechanic" href="https://www.wowhead.com/spell=306876/dark-collapse"></a> now deals 4.9 million shadow damage, instead of 215k!',
                    'The <a class="text-mechanic" href="https://www.wowhead.com/spell=306495/summon-ritual-obelisk"></a> now spawn in set locations for <a class="text-mechanic" href="https://www.wowhead.com/spell=312336/void-ritual"></a> allowing orb runners to learn the path',
                    'Do note: Although the two portals always spawn in the same location on mythic difficulty, which portal spawns in which location is random, meaning that the spawn portal and goal portal can be different from pull to pull',
                    'Last but not least, an <a class="text-mechanic" href="https://www.wowhead.com/npc=162432/awakened-terror"></a> add spawns after each orb is hit. This add casts <a class="text-mechanic" href="https://www.wowhead.com/spell=316211/terror-wave"></a> which will need to have an interrupt rotation'
                ];
            }


            // hivemind
            if($boss == 'hivemind') {
                $assignments = [
                    'tank' => 'Mark tanks',
                    'dps' => 'Assign 2 person interrupts for <a class="text-mechanic" href="https://www.wowhead.com/spell=313652/mind-numbing-nova"></a> (from <a class="text-mechanic" href="https://www.wowhead.com/npc=157253/kazir"></a>)',
                    'healer' => '---'
                ];
                $phaseOne = [
                    'tank' => [
                        'BOTH PHASES',
                        'notes' => [
                            'Tank bosses together (wihin 20 yards) when <a class="text-mechanic" href="https://www.wowhead.com/npc=157254/tekris"></a> has control, tank bosses separated (more than 20 yards) when <a class="text-mechanic" href="https://www.wowhead.com/npc=157253/kazir"></a> has control',
                            'Face <a class="text-mechanic" href="https://www.wowhead.com/npc=157254/tekris"></a> away from everyone else, side step frontal cone <a class="text-mechanic" href="https://www.wowhead.com/spell=307968/nullification-blast"></a>, if hit you are immune to heals for 6 seconds',
                            'Pick up large <a class="text-mechanic" href="https://www.wowhead.com/npc=160599/aqir-ravager"></a> add during <a class="text-mechanic" href="https://www.wowhead.com/npc=157254/tekris"></a> control, be ready to swap add if it dies slowly (It stacks a <a class="text-mechanic" href="https://www.wowhead.com/spell=315311/ravage"></a> DOT)',
                            'Grip in large adds'
                        ],
                    ],
                    'dps' => [
                        'PHASE 1 - STACK PHASE',
                        'notes' => [
                            'Burst down <a class="text-mechanic" href="https://www.wowhead.com/npc=157256/aqir-darter"></a> immediately, interrupt via stuns, grips, CCs',
                            'Be ready to burst down <a class="text-mechanic" href="https://www.wowhead.com/npc=160599/aqir-ravager"></a> before it stacks tank dot too high',
                            'Adds gain stacking damage and movespeed over time',
                            'Spread 4+ yards apart for <a class="text-mechanic" href="https://www.wowhead.com/spell=307232/echoing-void"></a>'
                        ],
                    ],
                    'healer' => [
                        'PHASE 1 - STACK PHASE',
                        'notes' => [
                            'CDs for hive mind control swaps (15% buffed damage each time, on a set timer)',
                            'Spread 4+ yards apart for <a class="text-mechanic" href="https://www.wowhead.com/spell=307232/echoing-void"></a>'
                        ],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2 - SPREAD PHASE',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 2 - SPREAD PHASE',
                        'notes' => [
                            'Bosses need to die within 10 seconds of each other',
                            'Be ready to swap to <a class="text-mechanic" href="https://ptr.wowhead.com/npc=157661/aqir-drone"></a> empowered by <a class="text-mechanic" href="https://www.wowhead.com/spell=307582/volatile-eruption"></a>, have to kill in 20 seconds.',
                            'All adds start healing at 20%, need to focus kill instead of passive cleave',
                            'Stand on edges of the room to dodge rolly bois'
                        ],
                    ],
                    'healer' => [
                        'PHASE 2 - SPREAD PHASE',
                        'notes' => [
                            'Stand on edges of the room to dodge rolly bois'
                        ],
                    ],
                ];
                $mythic = [
                    '<a class="text-mechanic" href="https://www.wowhead.com/spell=310402/devouring-frenzy"></a> deals 5% more damage from heroic version',
                    '<a class="text-mechanic" href="https://www.wowhead.com/spell=313441/spawn-acidic-aqir"></a> occurs, eggs will seep pools of acid before hatching',
                    'Haste reduction when <a class="text-mechanic" href="https://www.wowhead.com/spell=313652/mind-numbing-nova"></a> is not interrupted is increased to 100%, interrupts!',
                    'Spread out with <a class="text-mechanic" href="https://www.wowhead.com/spell=307232/echoing-void"></a> as the void zone will deal splash damage'
                ];
            }


            // shadhar
            if($boss == 'shad-har') {
                $assignments = [
                    'tank' => 'Special Instructions',
                    'dps' => 'DPS Instructions',
                    'healer' => 'Healing Instructions'
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                ];
                $mythic = [
                    ''
                ];
            }


            // drestagath
            if($boss == 'drest-agath') {
                $assignments = [
                    'tank' => 'Special Instructions',
                    'dps' => 'DPS Instructions',
                    'healer' => 'Healing Instructions'
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                ];
                $mythic = [
                    ''
                ];
            }


            // ilgynoth
            if($boss == 'il-gynoth') {
                $assignments = [
                    'tank' => 'Special Instructions',
                    'dps' => 'DPS Instructions',
                    'healer' => 'Healing Instructions'
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                ];
                $mythic = [
                    ''
                ];
            }


            // vexiona
            if($boss == 'vexiona') {
                $assignments = [
                    'tank' => 'Special Instructions',
                    'dps' => 'DPS Instructions',
                    'healer' => 'Healing Instructions'
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                ];
                $mythic = [
                    ''
                ];
            }


            // raden
            if($boss == 'ra-den') {
                $assignments = [
                    'tank' => 'Special Instructions',
                    'dps' => 'DPS Instructions',
                    'healer' => 'Healing Instructions'
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                ];
                $mythic = [
                    ''
                ];
            }


            // carapace
            if($boss == 'carapace') {
                $assignments = [
                    'tank' => 'Special Instructions',
                    'dps' => 'DPS Instructions',
                    'healer' => 'Healing Instructions'
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                ];
                $mythic = [
                    ''
                ];
            }


            // nzoth
            if($boss == 'n-zoth') {
                $assignments = [
                    'tank' => 'Special Instructions',
                    'dps' => 'DPS Instructions',
                    'healer' => 'Healing Instructions'
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [
                            'STEP1',
                            'STEP2'
                        ],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                ];
                $mythic = [
                    ''
                ];
            }

            return view('boss', compact('boss', 'assignments', 'phaseOne', 'phaseTwo', 'mythic'));
        }

        abort(404);

    }
}
