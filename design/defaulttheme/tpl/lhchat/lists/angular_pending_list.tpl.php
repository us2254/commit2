<ul class="list-unstyled">
      <li ng-repeat="chat in pending_chats.list track by chat.id">
      	<span ng-if="chat.country_code != undefined"><img ng-src="<?php echo erLhcoreClassDesign::design('images/flags');?>/{{chat.country_code}}.png" alt="{{chat.country_name}}" title="{{chat.country_name}}" /></span>
      	<i class="icon-user icon-user-assigned" ng-show="chat.user_name" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('pagelayout/pagelayout','Assigned operator');?> - {{chat.user_name}}"></i><a class="icon-info" title="ID - {{chat.id}}" ng-click="lhc.previewChat(chat.id)"></a><a class="icon-reply" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Redirect user to contact form.');?>" ng-click="lhc.redirectContact(chat.id,'<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Are you sure?');?>')" ></a><a class="right-action-hide icon-chat" ng-click="lhc.startChat(chat.id,chat.nick)" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Accept chat');?>"></a><a title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Open in a new window');?>" class="icon-popup" ng-click="lhc.startChatNewWindow(chat.id,chat.nick)"></a>{{chat.nick}}, <small><i>{{chat.wait_time_pending}},</i></small> {{chat.department_name}}
      </li>
</ul>
<p ng-show="pending_chats.list.length == 0"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('pagelayout/pagelayout','Empty...');?></p>
