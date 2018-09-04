@extends('internal.welcome')
@section('content')

	<div class="container new-discussion-timeline experiment-repo-nav  ">
		<div class="repository-content ">

			<div class="mb-3 repository-topics-container js-repository-topics-container js-details-container">
				<div id="topics-list-container" data-url="javascript:void(0)">
					<h6 class="btn-link f6 lh-condensed js-repo-topics-form-toggle js-details-target" aria-expanded="false">
						My Classes
					</h6>

				</div>

			</div>

			<div class="js-repo-meta-container">
				<div class="repository-meta mb-0  js-repo-meta-edit js-details-container ">
					<div class="repository-meta-content col-11 mb-1">
          <span class="col-11 text-gray-dark mr-2" itemprop="about">
           <button type="button" class="btn btn-sm js-details-target js-edit-repo-meta-button js-edit-repo-meta-toggle" aria-expanded="false">Edit</button>
          </span>
					</div>

					<span class="edit-link">
        <button type="button" class="btn btn-sm float-right js-details-target js-edit-repo-meta-button js-edit-repo-meta-toggle" aria-expanded="false">Edit</button>
      </span>
					<!-- '"` --><!-- </textarea></xmp> --><form class="edit-repository-meta js-edit-repository-meta" action="javascript:void(0);Hyfos2/eps-system/settings/update_meta" accept-charset="UTF-8" method="post">
						<input name="utf8" type="hidden" value="✓">
						<input type="hidden" name="_method" value="put">
						<input type="hidden" name="authenticity_token" value="yfnWMNmL2Bjdgg3gODwe1+jB0SF7eFEu/lfJ4DqtRczUzzy8OfadoL2zxgmyu7cC58POhBTPwRRAW00BK4sEIA==">
						<div class="field">
							<label for="repo_description">Description</label>
							<input type="text" id="repo_description" class="form-control input-contrast repo-description-field" name="repo_description" value="testing" placeholder="Short description of this repository">
						</div>
						<div class="field">
							<label for="repo_homepage">Website</label>
							<input type="url" id="repo_homepage" class="form-control input-contrast repo-website-field" name="repo_homepage" value="" placeholder="Website for this repository (optional)">
						</div>
						<button class="btn" type="submit">Save</button>
						or <button type="button" class="btn-link js-details-target js-edit-repo-meta-toggle" aria-expanded="true">Cancel</button>
					</form>  </div>
			</div>
			<div class="overall-summary overall-summary-bottomless">
				<div class="stats-switcher-viewport js-stats-switcher-viewport">
					<div class="stats-switcher-wrapper">
						<ul class="numbers-summary">
							<li class="commits">
								<a data-pjax="" href="javascript:void(0);Hyfos2/eps-system/commits/master">
									<svg class="octicon octicon-history" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8 13H6V6h5v2H8v5zM7 1C4.81 1 2.87 2.02 1.59 3.59L0 2v4h4L2.5 4.5C3.55 3.17 5.17 2.3 7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-.34.03-.67.09-1H.08C.03 7.33 0 7.66 0 8c0 3.86 3.14 7 7 7s7-3.14 7-7-3.14-7-7-7z"></path></svg>
									<span class="num text-emphasized">
                3
              </span>
									commits
								</a>
							</li>
							<li>
								<a data-pjax="" href="javascript:void(0);Hyfos2/eps-system/branches">
									<svg class="octicon octicon-git-branch" viewBox="0 0 10 16" version="1.1" width="10" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M10 5c0-1.11-.89-2-2-2a1.993 1.993 0 0 0-1 3.72v.3c-.02.52-.23.98-.63 1.38-.4.4-.86.61-1.38.63-.83.02-1.48.16-2 .45V4.72a1.993 1.993 0 0 0-1-3.72C.88 1 0 1.89 0 3a2 2 0 0 0 1 1.72v6.56c-.59.35-1 .99-1 1.72 0 1.11.89 2 2 2 1.11 0 2-.89 2-2 0-.53-.2-1-.53-1.36.09-.06.48-.41.59-.47.25-.11.56-.17.94-.17 1.05-.05 1.95-.45 2.75-1.25S8.95 7.77 9 6.73h-.02C9.59 6.37 10 5.73 10 5zM2 1.8c.66 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2C1.35 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2zm0 12.41c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm6-8c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"></path></svg>
									<span class="num text-emphasized">
              1
            </span>
									branch
								</a>
							</li>

							<li>
								<a href="javascript:void(0);Hyfos2/eps-system/releases">
									<svg class="octicon octicon-tag" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.685 1.72a2.49 2.49 0 0 0-1.76-.726H3.48A2.5 2.5 0 0 0 .994 3.48v2.456c0 .656.269 1.292.726 1.76l6.024 6.024a.99.99 0 0 0 1.402 0l4.563-4.563a.99.99 0 0 0 0-1.402L7.685 1.72zM2.366 7.048A1.54 1.54 0 0 1 1.9 5.925V3.48c0-.874.716-1.58 1.58-1.58h2.456c.418 0 .825.159 1.123.467l6.104 6.094-4.702 4.702-6.094-6.114zm.626-4.066h1.989v1.989H2.982V2.982h.01z"></path></svg>
									<span class="num text-emphasized">
              0
            </span>
									releases
								</a>
							</li>

							<li>
								<a href="javascript:void(0);Hyfos2/eps-system/graphs/contributors">
									<svg class="octicon octicon-organization" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M16 12.999c0 .439-.45 1-1 1H7.995c-.539 0-.994-.447-.995-.999H1c-.54 0-1-.561-1-1 0-2.634 3-4 3-4s.229-.409 0-1c-.841-.621-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.442.58 2.5 3c.058 2.41-.159 2.379-1 3-.229.59 0 1 0 1s1.549.711 2.42 2.088C9.196 9.369 10 8.999 10 8.999s.229-.409 0-1c-.841-.62-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.437.581 2.495 3c.059 2.41-.158 2.38-1 3-.229.59 0 1 0 1s3.005 1.366 3.005 4z"></path></svg>
									<span class="num text-emphasized">
      1
    </span>
									contributor
								</a>
							</li>
						</ul>

						<div class="repository-lang-stats">
							<ol class="repository-lang-stats-numbers">
								<li>
									<a href="javascript:void(0);Hyfos2/eps-system/search?l=html" data-ga-click="Repository, language stats search click, location:repo overview">
										<span class="color-block language-color" style="background-color:#e34c26;"></span>
										<span class="lang">HTML</span>
										<span class="percent">57.7%</span>
									</a>
								</li>
								<li>
									<a href="javascript:void(0);Hyfos2/eps-system/search?l=php" data-ga-click="Repository, language stats search click, location:repo overview">
										<span class="color-block language-color" style="background-color:#4F5D95;"></span>
										<span class="lang">PHP</span>
										<span class="percent">41.9%</span>
									</a>
								</li>
								<li>
                <span>
                  <span class="color-block language-color" style="background-color:#ededed;"></span>
                  <span class="lang">Other</span>
                  <span class="percent">0.4%</span>
                </span>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>

			<div class="repository-lang-stats-graph js-toggle-lang-stats" title="Click for language details" data-ga-click="Repository, language bar stats toggle, location:repo overview">
				<span class="language-color" aria-label="HTML 57.7%" style="width:57.7%; background-color:#e34c26;" itemprop="keywords">HTML</span>
				<span class="language-color" aria-label="PHP 41.9%" style="width:41.9%; background-color:#4F5D95;" itemprop="keywords">PHP</span>
				<span class="language-color" aria-label="Other 0.4%" style="width:0.4%; background-color:#ededed;" itemprop="keywords">Other</span>
			</div>



			<div class="mb-3 mt-2">
				<div class="js-socket-channel js-updatable-content" data-channel="repo:132959192:post-receive:25744257" data-url="/Hyfos2/eps-system/show_partial?partial=tree%2Frecently_touched_branches_list">
				</div>

			</div>

			<div class="file-navigation in-mid-page d-flex flex-items-start">

				<div class="select-menu branch-select-menu js-menu-container js-select-menu float-left">
					<button class=" btn btn-sm select-menu-button js-menu-target css-truncate" data-hotkey="w" type="button" aria-label="Switch branches or tags" aria-expanded="false" aria-haspopup="true">
						<i>Branch:</i>
						<span class="js-select-button css-truncate-target">master</span>
					</button>

					<div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax="">

						<div class="select-menu-modal">
							<div class="select-menu-header">
								<svg class="octicon octicon-x js-menu-close" role="img" aria-label="Close" viewBox="0 0 12 16" version="1.1" width="12" height="16"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"></path></svg>
								<span class="select-menu-title">Switch branches/tags</span>
							</div>

							<div class="select-menu-filters">
								<div class="select-menu-text-filter">
									<input type="text" aria-label="Find or create a branch…" id="context-commitish-filter-field" class="form-control js-filterable-field js-navigation-enable" placeholder="Find or create a branch…">
								</div>
								<div class="select-menu-tabs">
									<ul>
										<li class="select-menu-tab">
											<a href="javascript:void(0);Hyfos2/eps-system#" data-tab-filter="branches" data-filter-placeholder="Find or create a branch…" class="js-select-menu-tab" role="tab">Branches</a>
										</li>
										<li class="select-menu-tab">
											<a href="javascript:void(0);Hyfos2/eps-system#" data-tab-filter="tags" data-filter-placeholder="Find a tag…" class="js-select-menu-tab" role="tab">Tags</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches" role="menu">

								<div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


									<a class="select-menu-item js-navigation-item js-navigation-open selected" href="javascript:void(0);Hyfos2/eps-system/tree/master" data-name="master" data-skip-pjax="true" rel="nofollow">
										<svg class="octicon octicon-check select-menu-item-icon" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5L12 5z"></path></svg>
										<span class="select-menu-item-text css-truncate-target js-select-menu-filter-text">
                master
              </span>
									</a>
								</div>

								<!-- '"` --><!-- </textarea></xmp> --><form class="js-create-branch select-menu-item select-menu-new-item-form js-navigation-item js-new-item-form" action="javascript:void(0);Hyfos2/eps-system/branches" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="75TC+5lUCa310/U7lgRVqN/5kTItNq3bd0b5zG8m0q8A78Wlv1xKvScVWm/FdaketEpZY5syQh50k0neVqoA4A==">
									<svg class="octicon octicon-git-branch select-menu-item-icon" viewBox="0 0 10 16" version="1.1" width="10" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M10 5c0-1.11-.89-2-2-2a1.993 1.993 0 0 0-1 3.72v.3c-.02.52-.23.98-.63 1.38-.4.4-.86.61-1.38.63-.83.02-1.48.16-2 .45V4.72a1.993 1.993 0 0 0-1-3.72C.88 1 0 1.89 0 3a2 2 0 0 0 1 1.72v6.56c-.59.35-1 .99-1 1.72 0 1.11.89 2 2 2 1.11 0 2-.89 2-2 0-.53-.2-1-.53-1.36.09-.06.48-.41.59-.47.25-.11.56-.17.94-.17 1.05-.05 1.95-.45 2.75-1.25S8.95 7.77 9 6.73h-.02C9.59 6.37 10 5.73 10 5zM2 1.8c.66 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2C1.35 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2zm0 12.41c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm6-8c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"></path></svg>
									<div class="select-menu-item-text">
										<span class="select-menu-item-heading">Create branch: <span class="js-new-item-name"></span></span>
										<span class="description">from ‘master’</span>
									</div>
									<input type="hidden" name="name" id="name" class="js-new-item-value">
									<input type="hidden" name="branch" id="branch" value="master">
									<input type="hidden" name="path" id="path" value="">
								</form>
							</div>

							<div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
								<div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


								</div>

								<div class="select-menu-no-results">Nothing to show</div>
							</div>

						</div>
					</div>
				</div>


				<a href="javascript:void(0);Hyfos2/eps-system/pull/new/master" class="btn btn-sm new-pull-request-btn" data-pjax="" data-ga-click="Repository, new pull request, location:repo overview">
					New pull request
				</a>

				<div class="breadcrumb flex-auto">

				</div>

				<div class="BtnGroup">

					<!-- '"` --><!-- </textarea></xmp> --><form class="BtnGroup-form" action="javascript:void(0);Hyfos2/eps-system/new/master" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="S9EM9UKexeKreULBH/nblT9NieycbNiA6GmcTjOBtMdy/iSWBLF8wJRbeSvM175/HUFM7WNLy1AMQAD/JRu3xg==">
						<button class="btn btn-sm BtnGroup-item" type="submit" data-disable-with="Creating file…">
							Create new file
						</button>
					</form>


					<a href="javascript:void(0);Hyfos2/eps-system/upload/master" class="btn btn-sm BtnGroup-item">
						Upload files
					</a>


					<a href="javascript:void(0);Hyfos2/eps-system/find/master" class="btn btn-sm empty-icon float-right BtnGroup-item" data-pjax="" data-hotkey="t" data-ga-click="Repository, find file, location:repo overview">
						Find file
					</a>
				</div>


				<details class="get-repo-select-menu js-get-repo-select-menu position-relative details-overlay details-reset">
					<summary class="btn btn-sm btn-primary">
						Clone or download
						<span class="dropdown-caret"></span>
					</summary>
					<div class="position-relative">
						<div class="get-repo-modal dropdown-menu dropdown-menu-sw pb-0 js-toggler-container  js-get-repo-modal">

							<div class="get-repo-modal-options">
								<div class="clone-options https-clone-options">
									<!-- '"` --><!-- </textarea></xmp> --><form data-remote="true" action="javascript:void(0);users/set_protocol?protocol_selector=ssh&amp;protocol_type=push" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="SyaCvu8d0PYnU4zSQI5K87LvjGkJACiwb50vqYpidVA3vhgHEW2ikryV+nW0C0gvQ6lEk2l4hxg6eMYyWLuL5w=="><button type="submit" class="btn-link btn-change-protocol js-toggler-target float-right">Use SSH</button></form>

									<h4 class="mb-1">
										Clone with HTTPS
										<a class="muted-link" href="https://help.github.com/articles/which-remote-url-should-i-use" target="_blank" title="Which remote URL should I use?">
											<svg class="octicon octicon-question" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M6 10h2v2H6v-2zm4-3.5C10 8.64 8 9 8 9H6c0-.55.45-1 1-1h.5c.28 0 .5-.22.5-.5v-1c0-.28-.22-.5-.5-.5h-1c-.28 0-.5.22-.5.5V7H4c0-1.5 1.5-3 3-3s3 1 3 2.5zM7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7z"></path></svg>
										</a>
									</h4>
									<p class="mb-2 get-repo-decription-text">
										Use Git or checkout with SVN using the web URL.
									</p>

									<div class="input-group">
										<input type="text" class="form-control input-monospace input-sm js-url-field" value="javascript:void(0);Hyfos2/eps-system.git" aria-label="Clone this repository at javascript:void(0);Hyfos2/eps-system.git" readonly="">
										<div class="input-group-button">
											<clipboard-copy value="javascript:void(0);Hyfos2/eps-system.git" aria-label="Copy to clipboard" class="btn btn-sm" tabindex="0" role="button">
												<svg class="octicon octicon-clippy" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M2 13h4v1H2v-1zm5-6H2v1h5V7zm2 3V8l-3 3 3 3v-2h5v-2H9zM4.5 9H2v1h2.5V9zM2 12h2.5v-1H2v1zm9 1h1v2c-.02.28-.11.52-.3.7-.19.18-.42.28-.7.3H1c-.55 0-1-.45-1-1V4c0-.55.45-1 1-1h3c0-1.11.89-2 2-2 1.11 0 2 .89 2 2h3c.55 0 1 .45 1 1v5h-1V6H1v9h10v-2zM2 5h8c0-.55-.45-1-1-1H8c-.55 0-1-.45-1-1s-.45-1-1-1-1 .45-1 1-.45 1-1 1H3c-.55 0-1 .45-1 1z"></path></svg>
											</clipboard-copy>
										</div>
									</div>

								</div>

								<div class="clone-options ssh-clone-options">
									<!-- '"` --><!-- </textarea></xmp> --><form data-remote="true" action="javascript:void(0);users/set_protocol?protocol_selector=https&amp;protocol_type=push" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="/5mXIu0xaLWjfyqbygdU/TGZnHePClbt0T4e/pjzuOyDAQ2bE0Ea0Ti5XDw+glYhwN9Uje9y+UWE2/dlSipGWw=="><button type="submit" class="btn-link btn-change-protocol js-toggler-target float-right">Use HTTPS</button></form>

									<h4 class="mb-1">
										Clone with SSH
										<a class="muted-link" href="https://help.github.com/articles/which-remote-url-should-i-use" target="_blank" title="Which remote URL should I use?">
											<svg class="octicon octicon-question" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M6 10h2v2H6v-2zm4-3.5C10 8.64 8 9 8 9H6c0-.55.45-1 1-1h.5c.28 0 .5-.22.5-.5v-1c0-.28-.22-.5-.5-.5h-1c-.28 0-.5.22-.5.5V7H4c0-1.5 1.5-3 3-3s3 1 3 2.5zM7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7z"></path></svg>
										</a>
									</h4>
									<p class="mb-2 get-repo-decription-text">
										Use an SSH key and passphrase from account.
									</p>

									<div class="input-group">
										<input type="text" class="form-control input-monospace input-sm js-url-field" value="git@github.com:Hyfos2/eps-system.git" aria-label="Clone this repository at git@github.com:Hyfos2/eps-system.git" readonly="">
										<div class="input-group-button">
											<clipboard-copy value="git@github.com:Hyfos2/eps-system.git" aria-label="Copy to clipboard" class="btn btn-sm" tabindex="0" role="button">
												<svg class="octicon octicon-clippy" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M2 13h4v1H2v-1zm5-6H2v1h5V7zm2 3V8l-3 3 3 3v-2h5v-2H9zM4.5 9H2v1h2.5V9zM2 12h2.5v-1H2v1zm9 1h1v2c-.02.28-.11.52-.3.7-.19.18-.42.28-.7.3H1c-.55 0-1-.45-1-1V4c0-.55.45-1 1-1h3c0-1.11.89-2 2-2 1.11 0 2 .89 2 2h3c.55 0 1 .45 1 1v5h-1V6H1v9h10v-2zM2 5h8c0-.55-.45-1-1-1H8c-.55 0-1-.45-1-1s-.45-1-1-1-1 .45-1 1-.45 1-1 1H3c-.55 0-1 .45-1 1z"></path></svg>
											</clipboard-copy>
										</div>
									</div>

								</div>
								<div class="mt-2">
									<a href="https://desktop.github.com/" class="btn btn-outline get-repo-btn tooltipped tooltipped-s tooltipped-multiline js-get-repo" data-open-app="windows" aria-label="Clone Hyfos2/eps-system to your computer and use it in GitHub Desktop.">
										Open in Desktop
									</a>

									<a href="javascript:void(0);Hyfos2/eps-system/archive/master.zip" class="btn btn-outline get-repo-btn
" rel="nofollow" data-ga-click="Repository, download zip, location:repo overview">
										Download ZIP
									</a>

								</div>
							</div>

							<div class="js-modal-download-mac py-2 px-3 d-none">
								<h4 class="lh-condensed mb-3">Launching GitHub Desktop<span class="animated-ellipsis-container"><span class="animated-ellipsis">...</span></span></h4>
								<p class="text-gray">If nothing happens, <a href="https://desktop.github.com/">download GitHub Desktop</a> and try again.</p>
								<p><button class="btn-link js-get-repo-modal-download-back">Go back</button></p>
							</div>

							<div class="js-modal-download-windows py-2 px-3 d-none">
								<h4 class="lh-condensed mb-3">Launching GitHub Desktop<span class="animated-ellipsis-container"><span class="animated-ellipsis">...</span></span></h4>
								<p class="text-gray">If nothing happens, <a href="https://desktop.github.com/">download GitHub Desktop</a> and try again.</p>
								<p><button class="btn-link js-get-repo-modal-download-back">Go back</button></p>
							</div>

							<div class="js-modal-download-xcode py-2 px-3 d-none">
								<h4 class="lh-condensed mb-3">Launching Xcode<span class="animated-ellipsis-container"><span class="animated-ellipsis">...</span></span></h4>
								<p class="text-gray">If nothing happens, <a href="https://developer.apple.com/xcode/">download Xcode</a> and try again.</p>
								<p><button class="btn-link js-get-repo-modal-download-back">Go back</button></p>
							</div>

							<div class="js-modal-download-visual-studio py-2 px-3 d-none">
								<h4 class="lh-condensed mb-3">Launching Visual Studio<span class="animated-ellipsis-container"><span class="animated-ellipsis">...</span></span></h4>
								<p class="text-gray">If nothing happens, <a href="https://visualstudio.github.com/">download the GitHub extension for Visual Studio</a> and try again.</p>
								<p><button class="btn-link js-get-repo-modal-download-back">Go back</button></p>
							</div>

						</div>
					</div>
				</details>

			</div>





			<div class="commit-tease js-details-container Details d-flex">

				<div class="AvatarStack flex-self-start ">
					<div class="AvatarStack-body" aria-label="hyfos2">

						<img src="./Hyfos2_eps-system_ testing_files/68747470733a2f2f322e67726176617461722e636f6d2f6176617461722f36663465336538626531623838336664363332316439626630393331323834393f643d68747470732533412532462532466173736574732d63646e2e6769746875622" width="20" height="20" class="avatar" alt="hyfos2">
					</div>
				</div>

				<div class="flex-auto f6 no-wrap mr-3">

					<span class="commit-author user-mention">hyfos2</span>





					<a data-pjax="true" title="pushing" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/9a16981172d3a17d4397b5746236088481517e07">pushing</a>

				</div>
				<div class="no-wrap">
					Latest commit
					<a class="commit-tease-sha" href="javascript:void(0);Hyfos2/eps-system/commit/9a16981172d3a17d4397b5746236088481517e07" data-pjax="">
						9a16981
					</a>
					<span itemprop="dateModified"><relative-time datetime="2018-05-11T03:43:12Z" title="May 11, 2018, 5:43 AM GMT+2">on May 11</relative-time></span>
				</div>
			</div>






			<div class="file-wrap">
				<a class="d-none js-permalink-shortcut" data-hotkey="y" href="javascript:void(0);Hyfos2/eps-system/tree/9a16981172d3a17d4397b5746236088481517e07">Permalink</a>

				<table class="files js-navigation-container js-active-navigation-container" data-pjax="">


					<tbody>
					<tr class="warning include-fragment-error">
						<td class="icon"><svg class="octicon octicon-alert" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.893 1.5c-.183-.31-.52-.5-.887-.5s-.703.19-.886.5L.138 13.499a.98.98 0 0 0 0 1.001c.193.31.53.501.886.501h13.964c.367 0 .704-.19.877-.5a1.03 1.03 0 0 0 .01-1.002L8.893 1.5zm.133 11.497H6.987v-2.003h2.039v2.003zm0-3.004H6.987V5.987h2.039v4.006z"></path></svg></td>
						<td class="content" colspan="3">Failed to load latest commit information.</td>
					</tr>

					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file-directory" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M13 4H7V3c0-.66-.31-1-1-1H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1zM6 4H1V3h5v1z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="app" id="d2a57dc1d883fd21fb9951699df71cc7-465ec0896745a3dfb42d2a67ae3c11a5e49b3833" href="javascript:void(0);Hyfos2/eps-system/tree/master/app">app</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="pushing" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/9a16981172d3a17d4397b5746236088481517e07">pushing</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-11T03:43:12Z" title="May 11, 2018, 5:43 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file-directory" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M13 4H7V3c0-.66-.31-1-1-1H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1zM6 4H1V3h5v1z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="bootstrap" id="ca4c50b905dc21ea17a10549a6f5944f-a903227a07d46a894cec2dd26800ffcb640575db" href="javascript:void(0);Hyfos2/eps-system/tree/master/bootstrap">bootstrap</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="second" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/c41fb154b60a8ef668d2398686e90855ecf64a0d">second</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-11T08:53:38Z" title="May 11, 2018, 10:53 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file-directory" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M13 4H7V3c0-.66-.31-1-1-1H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1zM6 4H1V3h5v1z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="config" id="2245023265ae4cf87d02c8b6ba991139-84cf5feb112e7c9ef280630a72b739b2d53cf4b8" href="javascript:void(0);Hyfos2/eps-system/tree/master/config">config</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="pushing" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/9a16981172d3a17d4397b5746236088481517e07">pushing</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-11T03:43:12Z" title="May 11, 2018, 5:43 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file-directory" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M13 4H7V3c0-.66-.31-1-1-1H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1zM6 4H1V3h5v1z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="database" id="11e0eed8d3696c0a632f822df385ab3c-92f9bb88ed0703a2867622908682a7c0426fa592" href="javascript:void(0);Hyfos2/eps-system/tree/master/database">database</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="pushing" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/9a16981172d3a17d4397b5746236088481517e07">pushing</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-11T03:43:12Z" title="May 11, 2018, 5:43 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file-directory" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M13 4H7V3c0-.66-.31-1-1-1H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1zM6 4H1V3h5v1z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="public" id="4c9184f37cff01bcdc32dc486ec36961-d67fb6dea36e2b95f7d989bc859a5977b8477896" href="javascript:void(0);Hyfos2/eps-system/tree/master/public">public</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="pushing" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/9a16981172d3a17d4397b5746236088481517e07">pushing</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-11T03:43:12Z" title="May 11, 2018, 5:43 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file-directory" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M13 4H7V3c0-.66-.31-1-1-1H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1zM6 4H1V3h5v1z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="resources" id="55b558c7ef820e6e00e5993b9e55d93b-b0823029a5eba4d983737eaf162a8e713a70be7a" href="javascript:void(0);Hyfos2/eps-system/tree/master/resources">resources</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="pushing" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/9a16981172d3a17d4397b5746236088481517e07">pushing</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-11T03:43:12Z" title="May 11, 2018, 5:43 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file-directory" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M13 4H7V3c0-.66-.31-1-1-1H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1zM6 4H1V3h5v1z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="routes" id="1755347e5f6a762b84a3f6512a3e4e53-b1b79b0c1e3d56b2cf62bb26ca4ad418cbcf4ac7" href="javascript:void(0);Hyfos2/eps-system/tree/master/routes">routes</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="second" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/c41fb154b60a8ef668d2398686e90855ecf64a0d">second</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-11T08:53:38Z" title="May 11, 2018, 10:53 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file-directory" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M13 4H7V3c0-.66-.31-1-1-1H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1zM6 4H1V3h5v1z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="storage" id="ddecebdea58b5f264d27f1f7909bab74-186df0bbdf571e3dbcc3ce461b20922be0cd99b2" href="javascript:void(0);Hyfos2/eps-system/tree/master/storage">storage</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="second" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/c41fb154b60a8ef668d2398686e90855ecf64a0d">second</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-11T08:53:38Z" title="May 11, 2018, 10:53 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file-directory" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M13 4H7V3c0-.66-.31-1-1-1H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1zM6 4H1V3h5v1z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="tests" id="b61a6d542f9036550ba9c401c80f00ef-e776a01ac7fb685f2cf36427d3d2dbd79953e3f5" href="javascript:void(0);Hyfos2/eps-system/tree/master/tests">tests</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="second" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/c41fb154b60a8ef668d2398686e90855ecf64a0d">second</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-11T08:53:38Z" title="May 11, 2018, 10:53 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title=".env.example" id="cbfd64a28982a1818f2b5f16e7f9d634-cd06cc8dbf0559458cb11dc4aff385bf181d12d2" href="javascript:void(0);Hyfos2/eps-system/blob/master/.env.example">.env.example</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="second" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/c41fb154b60a8ef668d2398686e90855ecf64a0d">second</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-11T08:53:38Z" title="May 11, 2018, 10:53 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title=".gitattributes" id="fc723d30b02a4cca7a534518111c1a66-967315dd3d16d50942fa7abd383dfb95ec685491" href="javascript:void(0);Hyfos2/eps-system/blob/master/.gitattributes">.gitattributes</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="second" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/c41fb154b60a8ef668d2398686e90855ecf64a0d">second</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-11T08:53:38Z" title="May 11, 2018, 10:53 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title=".gitignore" id="a084b794bc0759e7a6b77810e01874f2-b6a4b86d7896efb1b63e08eaf6dcb22a19d2f06f" href="javascript:void(0);Hyfos2/eps-system/blob/master/.gitignore">.gitignore</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="second" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/c41fb154b60a8ef668d2398686e90855ecf64a0d">second</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-11T08:53:38Z" title="May 11, 2018, 10:53 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="README.md" id="04c6e90faac2675aa89e2176d2eec7d8-6bb3c98edb28639aac37576323ad9e989f3211e9" href="javascript:void(0);Hyfos2/eps-system/blob/master/README.md">README.md</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="testing" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/8fcc729cf91d63ed2ac0d231c4fdfd5791211622">testing</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-10T22:33:11Z" title="May 11, 2018, 12:33 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="artisan" id="8d361d0ecc9521f29c2c20aca2e40275-5c23e2e24fc5d9e8224d7357dbb583c83884582b" href="javascript:void(0);Hyfos2/eps-system/blob/master/artisan">artisan</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="second" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/c41fb154b60a8ef668d2398686e90855ecf64a0d">second</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-11T08:53:38Z" title="May 11, 2018, 10:53 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="composer.json" id="b5d0ee8c97c7abd7e3fa29b9a27d1780-a2af95bc7eb0fdbac80ef1f0c5cfca6744a667d5" href="javascript:void(0);Hyfos2/eps-system/blob/master/composer.json">composer.json</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="pushing" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/9a16981172d3a17d4397b5746236088481517e07">pushing</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-11T03:43:12Z" title="May 11, 2018, 5:43 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="composer.lock" id="1da2c7edc898c70e5a79a9997c98cecc-3580208a4a311f4f978e5836dda378845836f9fa" href="javascript:void(0);Hyfos2/eps-system/blob/master/composer.lock">composer.lock</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="pushing" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/9a16981172d3a17d4397b5746236088481517e07">pushing</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-11T03:43:12Z" title="May 11, 2018, 5:43 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="md" id="793914c9c583d9d86d0f4ed8c521b0c1-e69de29bb2d1d6434b8b29ae775ad8c2e48c5391" href="javascript:void(0);Hyfos2/eps-system/blob/master/md">md</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="second" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/c41fb154b60a8ef668d2398686e90855ecf64a0d">second</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-11T08:53:38Z" title="May 11, 2018, 10:53 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="package.json" id="b9cfc7f2cdf78a7f4b91a753d10865a2-7ceac0ea20ef8680d7ff0229863b08747db326c8" href="javascript:void(0);Hyfos2/eps-system/blob/master/package.json">package.json</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="second" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/c41fb154b60a8ef668d2398686e90855ecf64a0d">second</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-11T08:53:38Z" title="May 11, 2018, 10:53 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="phpunit.xml" id="ea896f6d36682ab3ef2d6e3f3de5abce-bb9c4a7e1e5881a12c51429270455bfbbc7f735e" href="javascript:void(0);Hyfos2/eps-system/blob/master/phpunit.xml">phpunit.xml</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="second" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/c41fb154b60a8ef668d2398686e90855ecf64a0d">second</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-11T08:53:38Z" title="May 11, 2018, 10:53 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="server.php" id="c7b36e05b81cc4174a915d1bd510c758-5fb6379e71f275a1784e6638adc96420aaa5c5b2" href="javascript:void(0);Hyfos2/eps-system/blob/master/server.php">server.php</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="second" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/c41fb154b60a8ef668d2398686e90855ecf64a0d">second</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-11T08:53:38Z" title="May 11, 2018, 10:53 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					<tr class="js-navigation-item">
						<td class="icon">
							<svg class="octicon octicon-file" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"></path></svg>
							<img width="16" height="16" class="spinner" alt="" src="./Hyfos2_eps-system_ testing_files/octocat-spinner-32.gif">
						</td>
						<td class="content">
							<span class="css-truncate css-truncate-target"><a class="js-navigation-open" title="webpack.mix.js" id="61877038a5575038809abf03f0009520-72fdbb16d60bc782872e660222b44ef9ab2a16c1" href="javascript:void(0);Hyfos2/eps-system/blob/master/webpack.mix.js">webpack.mix.js</a></span>
						</td>
						<td class="message">
            <span class="css-truncate css-truncate-target">
                  <a data-pjax="true" title="second" class="message" href="javascript:void(0);Hyfos2/eps-system/commit/c41fb154b60a8ef668d2398686e90855ecf64a0d">second</a>
            </span>
						</td>
						<td class="age">
							<span class="css-truncate css-truncate-target"><time-ago datetime="2018-05-11T08:53:38Z" title="May 11, 2018, 10:53 AM GMT+2">3 months ago</time-ago></span>
						</td>
					</tr>
					</tbody>
				</table>

			</div>

			<div class="repo-file-upload-tree-target js-document-dropzone js-upload-manifest-tree-view" data-drop-url="/Hyfos2/eps-system/upload/master" data-directory-upload="">
				<div class="repo-file-upload-outline">
					<div class="repo-file-upload-slate">
						<svg width="204" height="52" viewBox="0 0 204 52" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="files-lg" class="files-lg" fill="#717171">
								<path class="file-graph" d="M40,42 L40,12 L42,12 L42,40 L64,40 L64,42 L40,42 L40,42 Z M45,37 L45,16 L49,16 L49,37 L45,37 L45,37 Z M51,37 L51,22 L55,22 L55,37 L51,37 L51,37 Z M68.5,48 L35.5,48 C34.7,48 34,47.3 34,46.5 L34,7.5 C34,6.7 34.7,6 35.5,6 L59,6 L70,17 L70,46.5 C70,47.3 69.3,48 68.5,48 L68.5,48 Z M68,18 L58,8 L36,8 L36,46 L68,46 L68,18 L68,18 Z M57,37 L57,27 L61,27 L61,37 L57,37 L57,37 Z"></path>
								<path class="file-zip" d="M17,14 L1,14 C0.4,14 0,14.5 0,15 L0,41 C0,41.5 0.4,42 1,42 L23,42 C23.6,42 24,41.5 24,41 L24,21 L17,14 Z M22,40 L2,40 L2,16 L8,16 L8,18 L10,18 L10,16 L16,16 L22,22 L22,40 Z M8,30.5 C6.8,31.2 6,32.5 6,34 L6,36 L14,36 L14,34 C14,31.8 12.2,30 10,30 L10,28 L8,28 L8,30.5 Z M12,32 L12,34 L8,34 L8,32 L12,32 Z M10,20 L10,18 L12,18 L12,20 L10,20 Z M8,20 L10,20 L10,22 L8,22 L8,20 Z M10,24 L10,22 L12,22 L12,24 L10,24 Z M8,24 L10,24 L10,26 L8,26 L8,24 Z M10,28 L10,26 L12,26 L12,28 L10,28 Z"></path>
								<path class="file-generic" d="M168.5,48 L135.5,48 C134.7,48 134,47.3 134,46.5 L134,7.5 C134,6.7 134.7,6 135.5,6 L159,6 L170,17 L170,46.5 C170,47.3 169.3,48 168.5,48 Z M168,18 L158,8 L136,8 L136,46 L168,46 L168,18 Z M140,35 L140,33 L161,33 L161,35 L140,35 Z M140,30 L140,28 L161,28 L161,30 L140,30 Z M140,25 L140,23 L161,23 L161,25 L140,25 Z M140,17 L140,15 L152,15 L152,17 L140,17 Z M140,40 L140,38 L161,38 L161,40 L140,40 Z"></path>
								<path class="file-acrobat" d="M181,14 C180.5,14 180,14.5 180,15 L180,41 C180,41.5 180.5,42 181,42 L203,42 C203.5,42 204,41.5 204,41 L204,23 L204,21 L197,14 L181,14 Z M200.8,29.9 C200.3,29.8 199.8,29.7 199.3,29.7 C198.5,29.7 197.7,29.8 196.8,29.9 C196.3,29.8 195.7,29.3 194.8,28.6 C193.9,27.9 193.1,26.3 192.2,23.9 C192.5,22.2 192.6,20.9 192.7,19.9 C192.8,18.9 192.8,18.4 192.7,18.4 C192.8,17.6 192.6,17 192.3,16.6 C192,16.2 191.4,16 191,16 L196,16 L202,22 L202,30.4 C201.6,30.2 201.2,30 200.8,29.9 Z M182,16 L190,16 C189.8,16.1 189.6,16.2 189.4,16.4 C189.2,16.6 189,16.9 188.9,17.4 C188.7,18.2 188.6,19.2 188.7,20.3 C188.8,21.5 189.1,22.7 189.4,23.9 C188.9,25.4 188.2,27.2 187.2,29.3 C186.2,31.4 185.6,32.6 185.4,33 C185.1,33.1 184.7,33.3 184,33.6 C183.3,33.9 182.7,34.4 182,35 L182,16 L182,16 Z M195.1,31 C193.8,31.2 192.6,31.4 191.5,31.7 C190.3,32 189.1,32.4 187.8,32.9 L189,30.4 C189.8,28.7 190.4,27.2 190.8,25.8 L190.8,25.9 C191.7,28.2 192.5,29.6 193.1,30.1 C193.8,30.5 194.5,30.8 195.1,31 L195.1,31 Z M184.1,39.2 C185,38.4 186.2,36.9 187.7,34.4 C188.3,34.1 188.9,33.9 189.3,33.7 L190.1,33.4 C191.1,33.1 192,32.9 193,32.7 C194,32.5 195,32.4 196,32.3 C196.9,32.7 197.9,33.1 198.8,33.3 C199.8,33.6 200.6,33.7 201.3,33.8 C201.5,33.8 201.8,34 202,34 L202,40 L182,40 C182.4,39.9 183.6,39.6 184.1,39.2 Z"></path>
								<path class="file-code" d="M111,0 L82,0 C80.9,0 80,0.9 80,2 L80,50 C80,51.1 80.9,52 82,52 L122,52 C123.1,52 124,51.1 124,50 L124,13 L111,0 Z M122,50 L82,50 L82,2 L110,2 L122,14 L122,50 Z M107,18 L116,28 L107,38 L104,35 L111,28 L104,21 L107,18 Z M100,21 L93,28 L100,35 L97,38 L88,28 L97,18 L100,21 Z"></path>
							</g>
						</svg>

						<h2>Drop to upload your files</h2>
					</div>
				</div>
			</div>


			<div class="repo-file-upload-tree-target js-document-dropzone js-upload-manifest-tree-view" data-drop-url="/Hyfos2/eps-system/upload/master" data-directory-upload="">
				<div class="repo-file-upload-outline">
					<div class="repo-file-upload-slate">
						<svg width="204" height="52" viewBox="0 0 204 52" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="files-lg" class="files-lg" fill="#717171">
								<path class="file-graph" d="M40,42 L40,12 L42,12 L42,40 L64,40 L64,42 L40,42 L40,42 Z M45,37 L45,16 L49,16 L49,37 L45,37 L45,37 Z M51,37 L51,22 L55,22 L55,37 L51,37 L51,37 Z M68.5,48 L35.5,48 C34.7,48 34,47.3 34,46.5 L34,7.5 C34,6.7 34.7,6 35.5,6 L59,6 L70,17 L70,46.5 C70,47.3 69.3,48 68.5,48 L68.5,48 Z M68,18 L58,8 L36,8 L36,46 L68,46 L68,18 L68,18 Z M57,37 L57,27 L61,27 L61,37 L57,37 L57,37 Z"></path>
								<path class="file-zip" d="M17,14 L1,14 C0.4,14 0,14.5 0,15 L0,41 C0,41.5 0.4,42 1,42 L23,42 C23.6,42 24,41.5 24,41 L24,21 L17,14 Z M22,40 L2,40 L2,16 L8,16 L8,18 L10,18 L10,16 L16,16 L22,22 L22,40 Z M8,30.5 C6.8,31.2 6,32.5 6,34 L6,36 L14,36 L14,34 C14,31.8 12.2,30 10,30 L10,28 L8,28 L8,30.5 Z M12,32 L12,34 L8,34 L8,32 L12,32 Z M10,20 L10,18 L12,18 L12,20 L10,20 Z M8,20 L10,20 L10,22 L8,22 L8,20 Z M10,24 L10,22 L12,22 L12,24 L10,24 Z M8,24 L10,24 L10,26 L8,26 L8,24 Z M10,28 L10,26 L12,26 L12,28 L10,28 Z"></path>
								<path class="file-generic" d="M168.5,48 L135.5,48 C134.7,48 134,47.3 134,46.5 L134,7.5 C134,6.7 134.7,6 135.5,6 L159,6 L170,17 L170,46.5 C170,47.3 169.3,48 168.5,48 Z M168,18 L158,8 L136,8 L136,46 L168,46 L168,18 Z M140,35 L140,33 L161,33 L161,35 L140,35 Z M140,30 L140,28 L161,28 L161,30 L140,30 Z M140,25 L140,23 L161,23 L161,25 L140,25 Z M140,17 L140,15 L152,15 L152,17 L140,17 Z M140,40 L140,38 L161,38 L161,40 L140,40 Z"></path>
								<path class="file-acrobat" d="M181,14 C180.5,14 180,14.5 180,15 L180,41 C180,41.5 180.5,42 181,42 L203,42 C203.5,42 204,41.5 204,41 L204,23 L204,21 L197,14 L181,14 Z M200.8,29.9 C200.3,29.8 199.8,29.7 199.3,29.7 C198.5,29.7 197.7,29.8 196.8,29.9 C196.3,29.8 195.7,29.3 194.8,28.6 C193.9,27.9 193.1,26.3 192.2,23.9 C192.5,22.2 192.6,20.9 192.7,19.9 C192.8,18.9 192.8,18.4 192.7,18.4 C192.8,17.6 192.6,17 192.3,16.6 C192,16.2 191.4,16 191,16 L196,16 L202,22 L202,30.4 C201.6,30.2 201.2,30 200.8,29.9 Z M182,16 L190,16 C189.8,16.1 189.6,16.2 189.4,16.4 C189.2,16.6 189,16.9 188.9,17.4 C188.7,18.2 188.6,19.2 188.7,20.3 C188.8,21.5 189.1,22.7 189.4,23.9 C188.9,25.4 188.2,27.2 187.2,29.3 C186.2,31.4 185.6,32.6 185.4,33 C185.1,33.1 184.7,33.3 184,33.6 C183.3,33.9 182.7,34.4 182,35 L182,16 L182,16 Z M195.1,31 C193.8,31.2 192.6,31.4 191.5,31.7 C190.3,32 189.1,32.4 187.8,32.9 L189,30.4 C189.8,28.7 190.4,27.2 190.8,25.8 L190.8,25.9 C191.7,28.2 192.5,29.6 193.1,30.1 C193.8,30.5 194.5,30.8 195.1,31 L195.1,31 Z M184.1,39.2 C185,38.4 186.2,36.9 187.7,34.4 C188.3,34.1 188.9,33.9 189.3,33.7 L190.1,33.4 C191.1,33.1 192,32.9 193,32.7 C194,32.5 195,32.4 196,32.3 C196.9,32.7 197.9,33.1 198.8,33.3 C199.8,33.6 200.6,33.7 201.3,33.8 C201.5,33.8 201.8,34 202,34 L202,40 L182,40 C182.4,39.9 183.6,39.6 184.1,39.2 Z"></path>
								<path class="file-code" d="M111,0 L82,0 C80.9,0 80,0.9 80,2 L80,50 C80,51.1 80.9,52 82,52 L122,52 C123.1,52 124,51.1 124,50 L124,13 L111,0 Z M122,50 L82,50 L82,2 L110,2 L122,14 L122,50 Z M107,18 L116,28 L107,38 L104,35 L111,28 L104,21 L107,18 Z M100,21 L93,28 L100,35 L97,38 L88,28 L97,18 L100,21 Z"></path>
							</g>
						</svg>

						<h2>Drop to upload your files</h2>
					</div>
				</div>
			</div>



			<div id="readme" class="Box Box--condensed instapaper_body md">
				<div class="Box-header px-2 clearfix">
					<a href="javascript:void(0);Hyfos2/eps-system/edit/master/README.md" class="Box-btn-octicon btn-octicon float-right" aria-label="Edit this file"><svg class="octicon octicon-pencil" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path></svg></a>
					<h3 class="Box-title pr-3">
						<svg class="octicon octicon-book" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M3 5h4v1H3V5zm0 3h4V7H3v1zm0 2h4V9H3v1zm11-5h-4v1h4V5zm0 2h-4v1h4V7zm0 2h-4v1h4V9zm2-6v9c0 .55-.45 1-1 1H9.5l-1 1-1-1H2c-.55 0-1-.45-1-1V3c0-.55.45-1 1-1h5.5l1 1 1-1H15c.55 0 1 .45 1 1zm-8 .5L7.5 3H2v9h6V3.5zm7-.5H9.5l-.5.5V12h6V3z"></path></svg>
						README.md
					</h3>
				</div>
				<div class="Box-body p-6">
					<article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-eps-system" class="anchor" aria-hidden="true" href="javascript:void(0);Hyfos2/eps-system#eps-system"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>eps-system</h1>
						<p>testing</p>
					</article>
				</div>
			</div>


		</div>
		<div class="modal-backdrop js-touch-events"></div>
	</div>
@stop