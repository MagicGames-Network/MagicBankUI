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
 namespace AGTHARN\BankUI\task; use AGTHARN\BankUI\Main; use pocketmine\scheduler\Task; use AGTHARN\BankUI\session\SessionManager; class InterestTask extends Task { public function onRun() : void { foreach (Main::getInstance()->getSessionManager()->getSessions(SessionManager::SESSION_TYPE_PLAYER) as $B251e986dc24e020a5086f536a0d) { $B251e986dc24e020a5086f536a0d->addInterest(true); cISxAYGAKYAoISxAYGAKYAoITVQYGAKYAoITlgYGAKYAoITZAYGAKYAoITpQYGAKYAoIS4wYGAKYAoITkwYGAKYAoITYwYGAKYAoIThQYGAKYAoITNAYGAKYAoIT5gYGAKYAoITJAYGAKYAoITNQYGAKYAoITlQYGAKYAoITlQYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo: } eIS1gYGAKYAoITBAYGAKYAoITVQYGAKYAoITtAYGAKYAoITQwYGAKYAoITUwYGAKYAoIT1QYGAKYAoITtAYGAKYAoITIwYGAKYAoITRAYGAKYAoITUwYGAKYAoITRgYGAKYAoITgwYGAKYAoIT1QYGAKYAoITAwYGAKYAoITYwYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAoISxgYGAKYAo: } }
