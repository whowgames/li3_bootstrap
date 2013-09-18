<ul class="nav {{#class}}{{ class }}{{/class}}{{#active}} active{{/active}}"{{#id}} id="{{ id }}"{{/id}}>
	{{#items}}
		<li class="{{#class}} {{ class }}{{/class}}{{#active}} active{{/active}}{{#children}} dropdown{{/children}}">
			{{#url}}
				<a href="{{ url }}"{{#tab}} data-toggle="tab"{{/tab}}{{#children}} data-toggle="dropdown" class="dropdown-toggle"{{/children}}>
			{{/url}}
				{{#icon}}
					<i class="icon-{{ icon }}"></i>
				{{/icon}}
				{{#name}}{{ name }}{{/name}}
				{{#content}}{{{ content }}}{{/content}}
				{{#children}} <span class="caret"></span>{{/children}}
			{{#url}}
				</a>
			{{/url}}
			{{#children}}
				<ul class="dropdown-menu" role="menu">
					{{#items}}
						<li class="{{#active}} active{{/active}}">
							{{#url}}
								<a href="{{ url }}">
							{{/url}}
								{{#icon}}
									<i class="icon-{{ icon }}"></i>
								{{/icon}}
								{{#name}}{{ name }}{{/name}}
								{{#content}}{{{ content }}}{{/content}}
							{{#url}}
								</a>
							{{/url}}
						</li>
					{{/items}}
				</ul>
			{{/children}}
		</li>
	{{/items}}
</ul>
