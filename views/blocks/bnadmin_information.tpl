
    <dl id="footerInformation" class="col l2 s6">
        <dt>[{oxmultilang ident="INFORMATION" }]</dt>
        <dd>
            <ul class="list services">
                [{foreach from=$aServiceItems item=sItem}]
                    [{if isset($aServices.$sItem)}]
                        <li><a href="[{$aServices.$sItem->getLink()}]">[{$aServices.$sItem->oxcontents__oxtitle->value}]</a></li>
                    [{/if}]
                [{/foreach}]
[{oxifcontent ident="a_company" object="oCont"}]
  <li><a href="[{ $oCont->getLink() }]" rel="nofollow">[{ $oCont->oxcontents__oxtitle->value }]</a></li>
[{/oxifcontent}]				
[{oxifcontent ident="a_garantie" object="oCont"}]
  <li><a href="[{ $oCont->getLink() }]" rel="nofollow">[{ $oCont->oxcontents__oxtitle->value }]</a></li>
[{/oxifcontent}]					
				[{assign var="showNL" value=$oViewConf->myShowNewsletter()}]
				[{if $oViewConf->blNewsletter}]
					<li><a href="[{ oxgetseourl ident=$oViewConf->getSelfLink()|cat:"cl=newsletter" }]" rel="nofollow">[{ oxmultilang ident="NEWSLETTER" }]</a></li>
				[{/if}]
            </ul>
        </dd>
    </dl>
