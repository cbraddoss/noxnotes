<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BossController extends Controller
{
    /**
     * Redirect to first boss
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/wrathion/dps');
    }

    /**
     * Redirect old routes to new routes
     *
     * @return \Illuminate\Http\Response
     */
    public function boss(Request $request)
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

        if(in_array($request['boss'], $bosses)) {
            return redirect('/'.$request['boss'].'/dps');
        }

        abort(404);
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

        if(in_array($request['boss'], $bosses)) {

            $boss = $request['boss'];
            $role = $request['role'];

            // Wrathion
            if($boss == 'wrathion') {
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
                            'Watch for <a class="text-mechanic" href="https://ptr.wowhead.com/spell=306111/incineration"></a> cast, get out of raid and spread out 20-30 yards to avoid raid damage',
                            'Move away from boss during <a class="text-mechanic" href="https://ptr.wowhead.com/spell=306289/gale-blast"></a> and spread 5 yards apart'
                        ],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [
                            'Always stand on side of boss during phase 1',
                            'Watch for <a class="text-mechanic" href="https://ptr.wowhead.com/spell=306111/incineration"></a> cast, get out of raid and spread out 20-30 yards to avoid raid damage',
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
            }

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
                            'Taunt swap when <a class="text-mechanic" href="https://www.wowhead.com/spell=307977/shadow-shock"></a> times out (usually 4-6 stacks)',
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
                    'dps' => 'Assign soccer player rotations, groups of 3 (Heroic only. mythic everyone helps) for <a class="text-mechanic" href="https://www.wowhead.com/spell=312336/void-ritual"></a>',
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
                            'Do soccer with the <a class="text-mechanic" href="https://www.wowhead.com/spell=314202/void-orb"></a>. The orb will hit the edge of your character and move it in the direction you are facing (Note: the orb does not change direction from the middle of your character, but only the edge, learn this!)',
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
                            'Spread 4+ yards apart for <a class="text-mechanic" href="https://www.wowhead.com/spell=307232/echoing-void"></a>',
                            'Keep <a class="text-mechanic" href="https://www.wowhead.com/spell=313652/mind-numbing-nova"></a> interrupted using assigned interrupt rotation',
                            'Burst down <a class="text-mechanic" href="https://www.wowhead.com/npc=157256/aqir-darter"></a> immediately, interrupt via stuns, grips, CCs',
                            'Be ready to burst down <a class="text-mechanic" href="https://www.wowhead.com/npc=160599/aqir-ravager"></a> before it stacks tank dot too high',
                            'Adds gain stacking damage and movespeed over time',
                            'Bosses need to die within 10 seconds of each other'
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
                            'Keep <a class="text-mechanic" href="https://www.wowhead.com/spell=313652/mind-numbing-nova"></a> interrupted using assigned interrupt rotation',
                            'Be ready to swap to <a class="text-mechanic" href="https://ptr.wowhead.com/npc=157661/aqir-drone"></a> empowered by <a class="text-mechanic" href="https://www.wowhead.com/spell=307582/volatile-eruption"></a>, have to kill in 20 seconds.',
                            'All adds start healing at 20%, need to focus kill instead of passive cleave',
                            'Stand on edges of the room to dodge rolly bois',
                            'Bosses need to die within 10 seconds of each other'
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
                    'tank' => '---',
                    'dps' => '---',
                    'healer' => 'Assign spot healer?'
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [
                            'Avoid standing in water on edge of room!',
                            'Grong style taunt combo, swap at <a class="text-mechanic" href="https://www.wowhead.com/spell=307471/crush"></a> and <a class="text-mechanic" href="https://www.wowhead.com/spell=307472/dissolve"></a>',
                            'Tank with <a class="text-mechanic" href="https://www.wowhead.com/spell=307471/crush"></a> debuff cannot take <a class="text-mechanic" href="https://www.wowhead.com/spell=307472/dissolve"></a>',
                            'Tank with <a class="text-mechanic" href="https://www.wowhead.com/spell=307471/crush"></a> will be mainly tanking'
                        ],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [
                            'Avoid standing in water on edge of room!',
                            'Dodge <a class="text-mechanic" href="https://www.wowhead.com/spell=307945/umbral-eruption"></a> and don\'t stand in stuff',
                            'Stand behind boss and dodge <a class="text-mechanic" href="https://www.wowhead.com/spell=306928/umbral-breath"></a>',
                            'Kite fixated <a class="text-mechanic" href="https://www.wowhead.com/spell=306692/living-miasma"></a> adds 15 yards (or as far as possible) away from the raid'
                        ],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [
                            'Avoid standing in water on edge of room!',
                            'Spot heal <a class="text-mechanic" href="https://www.wowhead.com/spell=307358/debilitating-spit"></a>, first person may need to use a personal or external to help with damage',
                            'Stand in mid range or behind boss to be able to dodge <a class="text-mechanic" href="https://www.wowhead.com/spell=306928/umbral-breath"></a>'
                        ],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 3',
                        'notes' => [
                            'Move boss around outer edge of the room as pools of goop spawn',
                            'At 30% the boss gets a 25% damage buff, save CDs'
                        ],
                    ],
                    'dps' => [
                        'PHASE 2 & 3',
                        'notes' => [
                            'Stand in mid range or behind boss to be able to dodge <a class="text-mechanic" href="https://www.wowhead.com/spell=306930/entropic-breath"></a>',
                            'Soak <a class="text-mechanic" href="https://www.wowhead.com/spell=308177/entropic-buildup"></a>, do not go over 4 stacks. Rotate multiple people in if needed',
                            'Phase 3: Move along edge of room with tanks (follow behind) to drop <a class="text-mechanic" href="https://www.wowhead.com/spell=314736/bubbling-overflow"></a> in good spots'
                        ],
                    ],
                    'healer' => [
                        'PHASE 2& 3',
                        'notes' => [
                            'Spot heal <a class="text-mechanic" href="https://www.wowhead.com/spell=307358/debilitating-spit"></a>, first person may need to use a personal or external to help with damage',
                            'Phase 3: Move along edge of room with tanks (follow behind) to drop <a class="text-mechanic" href="https://www.wowhead.com/spell=314736/bubbling-overflow"></a> in good spots'
                        ],
                    ],
                ];
                $mythic = [
                    'Fixated players are rooted in place by <a class="text-mechanic" href="https://www.wowhead.com/spell=306692/living-miasma"></a>, so the raid must move away from them',
                    'Any ability that "frees from movement impairing effects" such as Dispersion, Disengage with Posthaste, Vengeful Retreat, Master\'s Call, Blessing of Freedom, Druid shapeshift etc will free the player from the slow.',
                    'After <a class="text-mechanic" href="https://www.wowhead.com/spell=306692/living-miasma"></a> dies, it leaves behind an item to pick up and use on the boss, like Grong orbs. Use this item immediately!',
                ];
            }


            // drestagath
            if($boss == 'drest-agath') {
                $assignments = [
                    'tank' => 'Mark Tanks',
                    'dps' => '---',
                    'healer' => '---'
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [
                            'Taunt after each <a class="text-mechanic" href="https://ptr.wowhead.com/spell=310277/volatile-seed"></a>',
                            'Take <a class="text-mechanic" href="https://ptr.wowhead.com/spell=310277/volatile-seed"></a> to adds to apply Volatile Corruption',
                            'One tank must always stay within range of boss to avoid <a class="text-mechanic" href="https://ptr.wowhead.com/spell=310246/void-grip"></a> from triggering',
                            'Move away from adds casting <a class="text-mechanic" href="https://ptr.wowhead.com/spell=310329/entropic-crash"></a>',
                            'Quickly identify the direction of the <a class="text-mechanic" href="https://ptr.wowhead.com/spell=310406/void-glare"></a> beam and move out of it'
                        ],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [
                            'Move away from tanks afflicted with <a class="text-mechanic" href="https://ptr.wowhead.com/spell=310277/volatile-seed"></a> to allow them to debuff adds',
                            'Move away from adds casting <a class="text-mechanic" href="https://ptr.wowhead.com/spell=310329/entropic-crash"></a>',
                            'Quickly identify the direction of the <a class="text-mechanic" href="https://ptr.wowhead.com/spell=310406/void-glare"></a> beam and move out of it',
                            'Quickly move away from your allies when afflicted with <a class="text-mechanic" href="https://ptr.wowhead.com/spell=310358/mutterings-of-insanity"></a>.',
                            'Add first, then boss',
                            '.',
                            'Melee: Focus on <a class="text-mechanic" href="https://ptr.wowhead.com/spell=310358/mutterings-of-insanity"></a>',
                            'Avoid the <a class="text-mechanic" href="https://ptr.wowhead.com/spell=310358/mutterings-of-insanity"></a> zone that travels out from the tentacle during <a class="text-mechanic" href="https://ptr.wowhead.com/spell=308947/throes-of-agony"></a>.',
                            '.',
                            'Ranged: Focus on <a class="text-mechanic" href="https://ptr.wowhead.com/npc=157612/eye-of-drestagath"></a>, help with <a class="text-mechanic" href="https://ptr.wowhead.com/npc=157613/maw-of-drestagath"></a> after',
                            '.',
                            'Pick up <a class="text-mechanic" href="https://ptr.wowhead.com/spell=308377/void-infused-ichor"></a> from dead adds, these will bypass boss buff allowing damage',
                            'Everyone help interrupt <a class="text-mechanic" href="https://ptr.wowhead.com/spell=310552/mind-flay"></a>'
                        ],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [
                            'Move away from tanks afflicted with <a class="text-mechanic" href="https://ptr.wowhead.com/spell=310277/volatile-seed"></a> to allow them to debuff adds',
                            'Move away from adds casting <a class="text-mechanic" href="https://ptr.wowhead.com/spell=310329/entropic-crash"></a>',
                            'Quickly identify the direction of the <a class="text-mechanic" href="https://ptr.wowhead.com/spell=310406/void-glare"></a> beam and move out of it',
                            'Quickly move away from your allies when afflicted with <a class="text-mechanic" href="https://ptr.wowhead.com/spell=310358/mutterings-of-insanity"></a>.'
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
                    '<a class="text-mechanic" href="https://ptr.wowhead.com/spell=315712/throes-of-dismemberment"></a> is active',
                    'When an appendage dies, it causes all appendages of the same type to cast their Agony Ability',
                    'Killing adds in waves seems to be best option, but this may change'
                ];
            }


            // vexiona
            if($boss == 'vexiona') {
                $assignments = [
                    'tank' => 'Set initial Diamond Markers for void drops',
                    'dps' => '---',
                    'healer' => '---'
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [
                            'Face boss away from raid to keep <a class="text-mechanic" href="https://www.wowhead.com/spell=307297/twilight-breath"></a> from hitting them',
                            'Face the <a class="text-mechanic" href="https://www.wowhead.com/npc=162719/void-ascendant"></a> add away from your allies when it casts <a class="text-mechanic" href="https://www.wowhead.com/spell=307421/annihilation"></a>. Face it towards Cultist adds to damage them!',
                            'Pick up the <a class="text-mechanic" href="https://www.wowhead.com/spell=306878/gift-of-the-void"></a> orb and use the <a class="text-mechanic" href="https://www.wowhead.com/spell=307421/annihilation"></a> extra action button to reset <a class="text-mechanic" href="https://www.wowhead.com/spell=307019/void-corruption"></a> stacks'
                        ],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [
                            'Be loosely spread for when <a class="text-mechanic" href="https://www.wowhead.com/spell=307317/encroaching-shadows"></a> is applied to avoid splash damage',
                            'Move to edge of room when afflicted with <a class="text-mechanic" href="https://www.wowhead.com/spell=307317/encroaching-shadows"></a> to drop <a class="text-mechanic" href="https://www.wowhead.com/spell=307343/shadowy-residue"></a> in good spots',
                            'Interrupt the Ritualist add and nuke down all adds as soon as possible'
                        ],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [
                            'Keep tanks healthy during <a class="text-mechanic" href="https://www.wowhead.com/spell=307359/despair"></a> to help with raid damage after it expires',
                            'Healers should dispel the <a class="text-mechanic" href="https://www.wowhead.com/spell=307421/annihilation"></a> targeted tank at least once during the beam to reduce the damage he takes',
                            'Be loosely spread for when <a class="text-mechanic" href="https://www.wowhead.com/spell=307317/encroaching-shadows"></a> is applied to avoid splash damage',
                            'Move to edge of room when afflicted with <a class="text-mechanic" href="https://www.wowhead.com/spell=307317/encroaching-shadows"></a> to drop <a class="text-mechanic" href="https://www.wowhead.com/spell=307343/shadowy-residue"></a> in good spots'
                        ],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [
                            'Dodge <a class="text-mechanic" href="https://www.wowhead.com/spell=307218/twilight-decimator"></a> when boss swoops across room',
                            '.',
                            'Phase 3: Stay within 6 yards of another player to avoid the haste reduction from <a class="text-mechanic" href="https://www.wowhead.com/spell=307284/terrifying-presence"></a>'
                        ],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [
                            'Dodge <a class="text-mechanic" href="https://www.wowhead.com/spell=307218/twilight-decimator"></a> when boss swoops across room',
                            'Continue to interrupt and kill Cultist adds',
                            'Continue to place <a class="text-mechanic" href="https://www.wowhead.com/spell=307343/shadowy-residue"></a> pools in low traffic areas',
                            '.',
                            'Phase 3: Stay within 6 yards of another player to avoid the haste reduction from <a class="text-mechanic" href="https://www.wowhead.com/spell=307284/terrifying-presence"></a>',
                            'Phase 3: Run away from the boss 20 yards during <a class="text-mechanic" href="https://www.wowhead.com/spell=307639/heart-of-darkness"></a>'
                        ],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [
                            'Dodge <a class="text-mechanic" href="https://www.wowhead.com/spell=307218/twilight-decimator"></a> when boss swoops across room',
                            'Continue to place <a class="text-mechanic" href="https://www.wowhead.com/spell=307343/shadowy-residue"></a> pools in low traffic areas',
                            '.',
                            'Phase 3: Stay within 6 yards of another player to avoid the haste reduction from <a class="text-mechanic" href="https://www.wowhead.com/spell=307284/terrifying-presence"></a>'
                        ],
                    ],
                ];
                $mythic = [
                    'Coming Soon...'
                ];
            }


            // ilgynoth
            if($boss == 'il-gynoth') {
                $assignments = [
                    'tank' => '---',
                    'dps' => '---',
                    'healer' => '---'
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [
                            'Rotate boss as needed to make sure the <a class="text-mechanic" href="https://www.wowhead.com/spell=309961/eye-of-nzoth"></a> doesn\'t hit the raid'
                        ],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [
                            'Kite the  <a class="text-mechanic" href="https://www.wowhead.com/spell=310319/corruptors-gaze"></a> beams into low traffic areas, ideally around the edges of the room or over areas previously covered by beams'
                        ],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [
                            'Kite the  <a class="text-mechanic" href="https://www.wowhead.com/spell=310319/corruptors-gaze"></a> beams into low traffic areas, ideally around the edges of the room or over areas previously covered by beams'
                        ],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [
                            'Move to an <a class="text-mechanic" href="https://www.wowhead.com/npc=158343/organ-of-corruption"></a> and kill it as soon as possible',
                        ],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [
                            'Move to an <a class="text-mechanic" href="https://www.wowhead.com/npc=158343/organ-of-corruption"></a> and kill it as soon as possible',
                            'Help interrupt the <a class="text-mechanic" href="https://www.wowhead.com/spell=310788/pumping-blood"></a> ability cast by the <a class="text-mechanic" href="https://www.wowhead.com/npc=158343/organ-of-corruption"></a>',
                            'One small team of interrupters should move to each organ that is not being killed this phase, so that they can kick the <a class="text-mechanic" href="https://www.wowhead.com/spell=310788/pumping-blood"></a> cast',
                            'Move away from allies when afflicted with <a class="text-mechanic" href="https://www.wowhead.com/spell=311159/cursed-blood"></a>',
                            'Kill any <a class="text-mechanic" href="https://www.wowhead.com/npc=159514/blood-of-nyalotha"></a> that spawn'
                        ],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [
                            'Move to an <a class="text-mechanic" href="https://www.wowhead.com/npc=158343/organ-of-corruption"></a> and kill it as soon as possible',
                            'Move away from allies when afflicted with <a class="text-mechanic" href="https://www.wowhead.com/spell=311159/cursed-blood"></a>',
                            'Dispel any  <a class="text-mechanic" href="https://www.wowhead.com/spell=312486/recurring-nightmare"></a> dots applied to players who are melee hit by the <a class="text-mechanic" href="https://www.wowhead.com/npc=159514/blood-of-nyalotha"></a> adds'
                        ],
                    ],
                ];
                $mythic = [
                    'Coming Soon...'
                ];
            }


            // raden
            if($boss == 'ra-den') {
                $assignments = [
                    'tank' => 'Set markers around room',
                    'dps' => '---',
                    'healer' => '---'
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [
                            'Taunt after each <a class="text-mechanic" href="https://www.wowhead.com/spell=306819/nullifying-strike"></a>'
                        ],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [
                            'Void Orb:',
                            'Soak Unstable Void while facing the next missle toward a good location. Cannot soak with <a class="text-mechanic" href="https://www.wowhead.com/spell=306279/instability-exposure"></a>',
                            'Kill <a class="text-mechanic" href="https://www.wowhead.com/npc=157366/void-hunter"></a>',
                            'Stack on player with <a class="text-mechanic" href="https://www.wowhead.com/spell=306881/void-collapse"></a>',
                            '.',
                            'Vita Orb:',
                            'Stack near boss to avoid gaining <a class="text-mechanic" href="https://www.wowhead.com/spell=306257/unstable-vita"></a>',
                            'Bounce <a class="text-mechanic" href="https://www.wowhead.com/spell=306257/unstable-vita"></a> behind the raid',
                            'Make sure <a class="text-mechanic" href="https://www.wowhead.com/spell=306257/unstable-vita"></a> targets are furthest from one another',
                            'Kill <a class="text-mechanic" href="https://www.wowhead.com/npc=69872/crackling-stalker"></a> asap and interrupt'
                        ],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [
                            'Heal off healing absorb <a class="text-mechanic" href="https://www.wowhead.com/spell=306184/unleashed-void"></a>'
                        ],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [
                            'Try to stay 50% or lower health for <a class="text-mechanic" href="https://www.wowhead.com/spell=313213/decaying-strike"></a> to help with <a class="text-mechanic" href="https://www.wowhead.com/spell=313227/decaying-wound"></a>',
                            'Dodge <a class="text-mechanic" href="https://www.wowhead.com/spell=310003/void-eruption"></a> zones',
                        ],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [
                            'Break the bonds when targeted',
                            'Stack near boss to help healers heal off <a class="text-mechanic" href="https://www.wowhead.com/spell=309852/ruin"></a>',
                            'Dodge <a class="text-mechanic" href="https://www.wowhead.com/spell=310003/void-eruption"></a> zones',
                            'Move away from your chained partner when afflicted with <a class="text-mechanic" href="https://www.wowhead.com/spell=310019/charged-bonds"></a>',
                            'Kill boss before too many <a class="text-mechanic" href="https://www.wowhead.com/spell=309755/lingering-energies"></a> stacks!'
                        ],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [
                            'Watch for <a class="text-mechanic" href="https://www.wowhead.com/spell=309852/ruin"></a> and heal off quick',
                            'Let tanks be 50% or lower health for <a class="text-mechanic" href="https://www.wowhead.com/spell=313213/decaying-strike"></a> hit',
                            'Dodge <a class="text-mechanic" href="https://www.wowhead.com/spell=310003/void-eruption"></a> zones',
                            'Move away from your chained partner when afflicted with <a class="text-mechanic" href="https://www.wowhead.com/spell=310019/charged-bonds"></a>'
                        ],
                    ],
                ];
                $mythic = [
                    'Coming Soon...'
                ];
            }


            // carapace
            if($boss == 'carapace') {
                $assignments = [
                    'tank' => '---',
                    'dps' => '---',
                    'healer' => '---'
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [
                            'Coming Soon...'
                        ],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [
                            'Coming Soon...'
                        ],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [
                            'Coming Soon...'
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
                    'Coming Soon...'
                ];
            }


            // nzoth
            if($boss == 'n-zoth') {
                $assignments = [
                    'tank' => '---',
                    'dps' => '---',
                    'healer' => '---'
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [
                            'Coming Soon...'
                        ],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [
                            'Coming Soon...'
                        ],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [
                            'Coming Soon...'
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

            return view('boss', compact('boss', 'role', 'assignments', 'phaseOne', 'phaseTwo', 'mythic'));
        }

        abort(404);

    }
}
