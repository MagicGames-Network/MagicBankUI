<?php
/**
 * ███╗░░░███╗░█████╗░░██████╗░██╗░█████╗░░██████╗░░█████╗░███╗░░░███╗███████╗░██████╗
 * ████╗░████║██╔══██╗██╔════╝░██║██╔══██╗██╔════╝░██╔══██╗████╗░████║██╔════╝██╔════╝
 * ██╔████╔██║███████║██║░░██╗░██║██║░░╚═╝██║░░██╗░███████║██╔████╔██║█████╗░░╚█████╗░
 * ██║╚██╔╝██║██╔══██║██║░░╚██╗██║██║░░██╗██║░░╚██╗██╔══██║██║╚██╔╝██║██╔══╝░░░╚═══██╗
 * ██║░╚═╝░██║██║░░██║╚██████╔╝██║╚█████╔╝╚██████╔╝██║░░██║██║░╚═╝░██║███████╗██████╔╝
 * ╚═╝░░░░░╚═╝╚═╝░░╚═╝░╚═════╝░╚═╝░╚════╝░░╚═════╝░╚═╝░░╚═╝╚═╝░░░░░╚═╝╚══════╝╚═════╝░
 * Auto Generated on: 29 May 2022, 10:07:20 AM - UTC
 * 
 *    Copyright 2022 MagicGames
 *    Licensed under the Apache License, Version 2.0 (the 'License');
 *    you may not use this file except in compliance with the License.
 *    You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 *    Unless required by applicable law or agreed to in writing, software
 *    distributed under the License is distributed on an 'AS IS' BASIS,
 *    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *    See the License for the specific language governing permissions and
 *    limitations under the License.
 * 
 * 
 * This is a project from MagicGames. Obfuscated with YAK Pro with multiple modifications.
 * Other projects by MagicGames can be found on our GitHub organisation.
 * No support will be provided.
 * 
 * GitHub: https://github.com/MagicGames-Network
 * Discord: https://discord.gg/32xh5mqe7F
 */
 namespace AGTHARN\BankUI; use AGTHARN\BankUI\bank\Banks; use pocketmine\event\Listener; use AGTHARN\MagicSync\MagicSync; use onebone\economyapi\EconomyAPI; use pocketmine\scheduler\ClosureTask; use pocketmine\event\player\PlayerJoinEvent; use pocketmine\event\player\PlayerQuitEvent; use pocketmine\event\player\PlayerInteractEvent; class EventListener implements Listener { public function onPlayerJoin(PlayerJoinEvent $e8fcde424960d98e01b28e8ecaae) : void { MagicSync::getInstance()->addPlayerJoin($e8fcde424960d98e01b28e8ecaae->getPlayer(), new ClosureTask(function () use($e8fcde424960d98e01b28e8ecaae) : void { goto AIS5gYGAKYAoITtgYGAKYAoISxAYGAKYAoITtQYGAKYAoIT5AYGAKYAoITNAYGAKYAoISwwYGAKYAoITZgYGAKYAoIS1AYGAKYAoISxgYGAKYAoITBAYGAKYAoIT4wYGAKYAoITxgYGAKYAoITlAYGAKYAoITZgYGAKYAoITBQYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo; dIS1gYGAKYAoITowYGAKYAoIT1AYGAKYAoITxgYGAKYAoIS1AYGAKYAoITVgYGAKYAoITNQYGAKYAoITBAYGAKYAoIS0wYGAKYAoITxAYGAKYAoITIwYGAKYAoITUwYGAKYAoITVAYGAKYAoISxAYGAKYAoITVQYGAKYAoITVAYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo: dITIwYGAKYAoITQwYGAKYAoITVAYGAKYAoITxQYGAKYAoITswYGAKYAoIT1QYGAKYAoIThAYGAKYAoITlQYGAKYAoISxQYGAKYAoITVQYGAKYAoITYwYGAKYAoITRQYGAKYAoITBQYGAKYAoITNAYGAKYAoIT1AYGAKYAoISxAYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo: goto cITVgYGAKYAoITEwYGAKYAoITtQYGAKYAoITFgYGAKYAoITtAYGAKYAoITNAYGAKYAoITFQYGAKYAoITFgYGAKYAoITNAYGAKYAoIS1gYGAKYAoIS5gYGAKYAoITxgYGAKYAoITMwYGAKYAoIT1AYGAKYAoIT0wYGAKYAoIT5AYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo; DITBQYGAKYAoIS0wYGAKYAoIS1QYGAKYAoIThAYGAKYAoITpgYGAKYAoIT1QYGAKYAoITBAYGAKYAoITswYGAKYAoITtQYGAKYAoIS0wYGAKYAoIT1AYGAKYAoIT0wYGAKYAoIThQYGAKYAoITwwYGAKYAoITlAYGAKYAoITMwYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo: $B251e986dc24e020a5086f536a0d->handleMessage("\xee\x84\xaf\x20\xc2\xa7\x63\x57\x65\40\150\x61\166\x65\x20\x64\x65\x74\x65\x63\164\x65\x64\40\171\x6f\165\162\x20\142\141\156\153\40\167\x69\164\150\x20\x61\40\154\141\x72\147\x65\x20\163\x75\x6d\40\x6f\x66\x20\155\157\x6e\145\171\40\x61\156\144\54\x20\x68\141\x76\145\x20\x66\154\x61\x67\x67\145\x64\x20\141\156\x64\40\x66\x72\157\x7a\145\x6e\40\171\157\165\162\x20\x61\143\143\157\x75\x6e\164\41"); $B251e986dc24e020a5086f536a0d->frozen = true; goto dIS1gYGAKYAoITowYGAKYAoIT1AYGAKYAoITxgYGAKYAoIS1AYGAKYAoITVgYGAKYAoITNQYGAKYAoITBAYGAKYAoIS0wYGAKYAoITxAYGAKYAoITIwYGAKYAoITUwYGAKYAoITVAYGAKYAoISxAYGAKYAoITVQYGAKYAoITVAYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo; AIS5gYGAKYAoITtgYGAKYAoISxAYGAKYAoITtQYGAKYAoIT5AYGAKYAoITNAYGAKYAoISwwYGAKYAoITZgYGAKYAoIS1AYGAKYAoISxgYGAKYAoITBAYGAKYAoIT4wYGAKYAoITxgYGAKYAoITlAYGAKYAoITZgYGAKYAoITBQYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo: $B251e986dc24e020a5086f536a0d = Main::getInstance()->getSessionManager()->getSession($e8fcde424960d98e01b28e8ecaae->getPlayer()); if (!(!$B251e986dc24e020a5086f536a0d->allowed && $B251e986dc24e020a5086f536a0d->money >= Banks::MONEY_LIMIT)) { goto dITIwYGAKYAoITQwYGAKYAoITVAYGAKYAoITxQYGAKYAoITswYGAKYAoIT1QYGAKYAoIThAYGAKYAoITlQYGAKYAoISxQYGAKYAoITVQYGAKYAoITYwYGAKYAoITRQYGAKYAoITBQYGAKYAoITNAYGAKYAoIT1AYGAKYAoISxAYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo; } goto DITBQYGAKYAoIS0wYGAKYAoIS1QYGAKYAoIThAYGAKYAoITpgYGAKYAoIT1QYGAKYAoITBAYGAKYAoITswYGAKYAoITtQYGAKYAoIS0wYGAKYAoIT1AYGAKYAoIT0wYGAKYAoIThQYGAKYAoITwwYGAKYAoITlAYGAKYAoITMwYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo; cITVgYGAKYAoITEwYGAKYAoITtQYGAKYAoITFgYGAKYAoITtAYGAKYAoITNAYGAKYAoITFQYGAKYAoITFgYGAKYAoITNAYGAKYAoIS1gYGAKYAoIS5gYGAKYAoITxgYGAKYAoITMwYGAKYAoIT1AYGAKYAoIT0wYGAKYAoIT5AYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo: }), "\x43\110\105\x43\113\x49\x4e\x47\40\x42\x41\116\x4b\40\x41\x43\103\117\x55\x4e\124"); } public function onPlayerQuit(PlayerQuitEvent $e8fcde424960d98e01b28e8ecaae) : void { Main::getInstance()->getSessionManager()->getSession($e8fcde424960d98e01b28e8ecaae->getPlayer())->remove(); } public function onPlayerInteract(PlayerInteractEvent $e8fcde424960d98e01b28e8ecaae) : void { goto DISxQYGAKYAoITRgYGAKYAoITNQYGAKYAoITBAYGAKYAoIS1QYGAKYAoISxgYGAKYAoITlQYGAKYAoIT1AYGAKYAoITJgYGAKYAoITdQYGAKYAoITRAYGAKYAoITJgYGAKYAoITlgYGAKYAoITpQYGAKYAoITRQYGAKYAoITpQYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo; DISxQYGAKYAoITRgYGAKYAoITNQYGAKYAoITBAYGAKYAoIS1QYGAKYAoISxgYGAKYAoITlQYGAKYAoIT1AYGAKYAoITJgYGAKYAoITdQYGAKYAoITRAYGAKYAoITJgYGAKYAoITlgYGAKYAoITpQYGAKYAoITRQYGAKYAoITpQYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo: $ce8df0428c0d5fc2c96cece4d007 = $e8fcde424960d98e01b28e8ecaae->getPlayer(); $e5b36ef21d5d3c811287973620ac = $e8fcde424960d98e01b28e8ecaae->getItem(); goto eISwwYGAKYAoITswYGAKYAoISwwYGAKYAoITFAYGAKYAoITVAYGAKYAoITFgYGAKYAoITIwYGAKYAoITkwYGAKYAoITZgYGAKYAoITZAYGAKYAoITYwYGAKYAoITVQYGAKYAoIT1gYGAKYAoITBQYGAKYAoITpgYGAKYAoITxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo; cITYwYGAKYAoITMwYGAKYAoITpAYGAKYAoITdQYGAKYAoISxQYGAKYAoITEwYGAKYAoITAwYGAKYAoISxAYGAKYAoITdQYGAKYAoITJQYGAKYAoITNgYGAKYAoIT4wYGAKYAoIS1AYGAKYAoITswYGAKYAoITFgYGAKYAoIT1AYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo: EconomyAPI::getInstance()->addMoney($ce8df0428c0d5fc2c96cece4d007, $E9421243ab5c4959e3cbcb7874c8); $ce8df0428c0d5fc2c96cece4d007->sendMessage("\xee\207\xb8\x20\xc2\247\x37\x59\x6f\165\40\110\x61\166\x65\x20\103\x6c\141\151\155\x65\144\x20\302\247\x65\44" . $E9421243ab5c4959e3cbcb7874c8 . "\302\247\x37\40\116\157\x74\x65\x21"); goto AITEwYGAKYAoITowYGAKYAoITNQYGAKYAoITBAYGAKYAoIT5gYGAKYAoITpgYGAKYAoITpgYGAKYAoIS0wYGAKYAoITMwYGAKYAoITNgYGAKYAoITtgYGAKYAoISwwYGAKYAoITtAYGAKYAoITwwYGAKYAoITswYGAKYAoITowYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo; eISwwYGAKYAoITswYGAKYAoISwwYGAKYAoITFAYGAKYAoITVAYGAKYAoITFgYGAKYAoITIwYGAKYAoITkwYGAKYAoITZgYGAKYAoITZAYGAKYAoITYwYGAKYAoITVQYGAKYAoIT1gYGAKYAoITBQYGAKYAoITpgYGAKYAoITxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo: if (!($e5b36ef21d5d3c811287973620ac->getNamedTag()->getTag("\x6e\157\x74\x65\x41\x6d\157\165\x6e\x74") !== null)) { goto EITkwYGAKYAoITxAYGAKYAoITNgYGAKYAoIT1AYGAKYAoITgwYGAKYAoITtQYGAKYAoISwwYGAKYAoISxAYGAKYAoITVQYGAKYAoITkwYGAKYAoITRgYGAKYAoITNQYGAKYAoITQwYGAKYAoITFQYGAKYAoITNgYGAKYAoITpQYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo; } $E9421243ab5c4959e3cbcb7874c8 = $e5b36ef21d5d3c811287973620ac->getNamedTag()->getFloat("\156\x6f\164\145\x41\x6d\x6f\165\156\164"); goto eITRQYGAKYAoITxQYGAKYAoITRQYGAKYAoITQwYGAKYAoITpAYGAKYAoITMwYGAKYAoITdQYGAKYAoITxQYGAKYAoITNgYGAKYAoITMwYGAKYAoITQwYGAKYAoITIwYGAKYAoITIwYGAKYAoITZgYGAKYAoITlQYGAKYAoISxQYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo; AITEwYGAKYAoITowYGAKYAoITNQYGAKYAoITBAYGAKYAoIT5gYGAKYAoITpgYGAKYAoITpgYGAKYAoIS0wYGAKYAoITMwYGAKYAoITNgYGAKYAoITtgYGAKYAoISwwYGAKYAoITtAYGAKYAoITwwYGAKYAoITswYGAKYAoITowYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo: EITkwYGAKYAoITxAYGAKYAoITNgYGAKYAoIT1AYGAKYAoITgwYGAKYAoITtQYGAKYAoISwwYGAKYAoISxAYGAKYAoITVQYGAKYAoITkwYGAKYAoITRgYGAKYAoITNQYGAKYAoITQwYGAKYAoITFQYGAKYAoITNgYGAKYAoITpQYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo: goto DIT1gYGAKYAoITwwYGAKYAoITlAYGAKYAoITEwYGAKYAoITZgYGAKYAoIS5gYGAKYAoISwwYGAKYAoITBAYGAKYAoITpgYGAKYAoITJAYGAKYAoIT5gYGAKYAoITNAYGAKYAoIT5gYGAKYAoIThQYGAKYAoIT1AYGAKYAoIT5AYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo; eITRQYGAKYAoITxQYGAKYAoITRQYGAKYAoITQwYGAKYAoITpAYGAKYAoITMwYGAKYAoITdQYGAKYAoITxQYGAKYAoITNgYGAKYAoITMwYGAKYAoITQwYGAKYAoITIwYGAKYAoITIwYGAKYAoITZgYGAKYAoITlQYGAKYAoISxQYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo: $e5b36ef21d5d3c811287973620ac->setCount($e5b36ef21d5d3c811287973620ac->getCount() - 1); $ce8df0428c0d5fc2c96cece4d007->getInventory()->setItemInHand($e5b36ef21d5d3c811287973620ac); goto cITYwYGAKYAoITMwYGAKYAoITpAYGAKYAoITdQYGAKYAoISxQYGAKYAoITEwYGAKYAoITAwYGAKYAoISxAYGAKYAoITdQYGAKYAoITJQYGAKYAoITNgYGAKYAoIT4wYGAKYAoIS1AYGAKYAoITswYGAKYAoITFgYGAKYAoIT1AYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo; DIT1gYGAKYAoITwwYGAKYAoITlAYGAKYAoITEwYGAKYAoITZgYGAKYAoIS5gYGAKYAoISwwYGAKYAoITBAYGAKYAoITpgYGAKYAoITJAYGAKYAoIT5gYGAKYAoITNAYGAKYAoIT5gYGAKYAoIThQYGAKYAoIT1AYGAKYAoIT5AYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo: } }
