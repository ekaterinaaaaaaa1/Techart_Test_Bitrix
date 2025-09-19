<div class="bx-filter {{ $templateData['TEMPLATE_CLASS'] }} {{ ($arParams['FILTER_VIEW_MODE'] == 'HORIZONTAL') ? 'bx-filter-horizontal' : '' }}">
	<div class="bx-filter-section container-fluid">
		<div class="row"><div class="{{ ($arParams['FILTER_VIEW_MODE'] == 'HORIZONTAL') ? 'col-sm-6 col-md-4' : 'col-lg-12' }} bx-filter-title">{!! GetMessage("CT_BCSF_FILTER_TITLE") !!}</div></div>
		<form name="{{ $arResult['FILTER_NAME'].'_form' }}" action="{{ $arResult['FORM_ACTION'] }}" method="get" class="smartfilter">
			@foreach($arResult["HIDDEN"] as $arItem)
			<input type="hidden" name="{{ $arItem['CONTROL_NAME'] }}" id="{{ $arItem['CONTROL_ID'] }}" value="{{ $arItem['HTML_VALUE'] }}" />
			@endforeach
			<div class="row">
				@foreach($arResult["ITEMS"] as $key=>$arItem)
					@if(isset($arItem["PRICE"]))
						<div class="{{($arParams['FILTER_VIEW_MODE'] == 'HORIZONTAL')? 'col-sm-6 col-md-4' : 'col-lg-12' }} bx-filter-parameters-box bx-active">
							<span class="bx-filter-container-modef"></span>
							<div class="bx-filter-parameters-box-title" onclick="smartFilter.hideFilterProps(this)"><span>{!! $arItem["NAME"] !!} <i data-role="prop_angle" class="fa fa-angle-{{ (isset($arItem['DISPLAY_EXPANDED']) && $arItem['DISPLAY_EXPANDED'] == 'Y') ? 'up' : 'down' }}"></i></span></div>
							<div class="bx-filter-block" data-role="bx_filter_block">
								<div class="row bx-filter-parameters-box-container">
									<div class="col-xs-6 bx-filter-parameters-box-container-block bx-left">
										<i class="bx-ft-sub">{!! GetMessage("CT_BCSF_FILTER_FROM") !!}</i>
										<div class="bx-filter-input-container">
											<input
												class="min-price"
												type="text"
												name="{{ $arItem['VALUES']['MIN']['CONTROL_NAME'] }}"
												id="{{ $arItem['VALUES']['MIN']['CONTROL_ID'] }}"
												value="{{ $arItem['VALUES']['MIN']['HTML_VALUE'] }}"
												size="5"
												onkeyup="smartFilter.keyup(this)"
											/>
										</div>
									</div>
									<div class="col-xs-6 bx-filter-parameters-box-container-block bx-right">
										<i class="bx-ft-sub">{!! GetMessage("CT_BCSF_FILTER_TO") !!}</i>
										<div class="bx-filter-input-container">
											<input
												class="max-price"
												type="text"
												name="{{ $arItem['VALUES']['MAX']['CONTROL_NAME'] }}"
												id="{{ $arItem['VALUES']['MAX']['CONTROL_ID'] }}"
												value="{{ $arItem['VALUES']['MAX']['HTML_VALUE'] }}"
												size="5"
												onkeyup="smartFilter.keyup(this)"
											/>
										</div>
									</div>

									<div class="col-xs-10 col-xs-offset-1 bx-ui-slider-track-container">
										<div class="bx-ui-slider-track" id="drag_track_{{ $key }}">
											@for($i = 0; $i <= $step_num; $i++):
											<div class="bx-ui-slider-part p{{ $i+1 }}"><span>{!! $pricesArray[$key][$i] !!}</span></div>
											@endfor

											<div class="bx-ui-slider-pricebar-vd" style="left: 0;right: 0;" id="colorUnavailableActive_{{ $key }}"></div>
											<div class="bx-ui-slider-pricebar-vn" style="left: 0;right: 0;" id="colorAvailableInactive_{{ $key }}"></div>
											<div class="bx-ui-slider-pricebar-v"  style="left: 0;right: 0;" id="colorAvailableActive_{{ $key }}"></div>
											<div class="bx-ui-slider-range" id="drag_tracker_{{ $key }}"  style="left: 0%; right: 0%;">
												<a class="bx-ui-slider-handle left"  style="left:0;" href="javascript:void(0)" id="left_slider_{{ $key }}"></a>
												<a class="bx-ui-slider-handle right" style="right:0;" href="javascript:void(0)" id="right_slider_{{ $key }}"></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endif
				@endforeach

				@foreach($arResult["ITEMS"] as $key=>$arItem)
					@if(
						empty($arItem["VALUES"])
						|| isset($arItem["PRICE"])
					)
						@continue
                    @endif

					<div class="{{ ($arParams['FILTER_VIEW_MODE'] == 'HORIZONTAL') ? 'col-sm-6 col-md-4' : 'col-lg-12' }} bx-filter-parameters-box {{ ($arItem['DISPLAY_EXPANDED'] == 'Y') ? 'bx-active' : '' }}">
						<span class="bx-filter-container-modef"></span>
						<div class="bx-filter-parameters-box-title" onclick="smartFilter.hideFilterProps(this)">
							<span class="bx-filter-parameters-box-hint">{!! $arItem["NAME"] !!}
								@if ($arItem["FILTER_HINT"] <> "")
									<i id="item_title_hint_{{ $arItem['ID'] }}" class="fa fa-question-circle"></i>
									<script>
										new top.BX.CHint({
											parent: top.BX("item_title_hint_{{ $arItem['ID'] }}"),
											show_timeout: 10,
											hide_timeout: 200,
											dx: 2,
											preventHide: true,
											min_width: 250,
											hint: '{{ CUtil::JSEscape($arItem["FILTER_HINT"]) }}'
										});
									</script>
								@endif
								<i data-role="prop_angle" class="fa fa-angle-{{ ($arItem['DISPLAY_EXPANDED'] == 'Y') ? 'up' : 'down' }}"></i>
							</span>
						</div>

						<div class="bx-filter-block" data-role="bx_filter_block">
							<div class="row bx-filter-parameters-box-container">
								<div class="col-xs-12">
									@foreach($arItem["VALUES"] as $val => $ar)
										<div class="checkbox">
											<label data-role="label_{{$ar['CONTROL_ID']}}" class="bx-filter-param-label {{ $ar['DISABLED'] ? 'disabled': '' }}" for="{{ $ar['CONTROL_ID'] }}">
												<span class="bx-filter-input-checkbox">
													<input
														type="checkbox"
														value="{{ $ar['HTML_VALUE'] }}"
														name="{{ $ar['CONTROL_NAME'] }}"
														id="{{ $ar['CONTROL_ID'] }}"
														@if ($ar['CHECKED']) {!! 'checked="checked"' !!} @else {!! '' !!} @endif
														onclick="smartFilter.click(this)"
													/>
													<span class="bx-filter-param-text" title="{{ $ar['VALUE'] }}">{{ $ar['VALUE'] }}
													@if ($arParams["DISPLAY_ELEMENT_COUNT"] !== "N" && isset($ar["ELEMENT_COUNT"]))
                                                        &nbsp;(<span data-role="count_{{ $ar['CONTROL_ID'] }}">{{!! $ar["ELEMENT_COUNT"] !!}}</span>)
													@endif</span>
												</span>
											</label>
										</div>
									@endforeach
								</div>
							</div>
							<div style="clear: both"></div>
						</div>
					</div>
				@endforeach
			</div>
			<div class="row">
				<div class="col-xs-12 bx-filter-button-box">
					<div class="bx-filter-block">
						<div class="bx-filter-parameters-box-container">
							<input
								class="btn btn-themes"
								type="submit"
								id="set_filter"
								name="set_filter"
								value="{{ GetMessage('CT_BCSF_SET_FILTER') }}"
							/>
							<input
								class="btn btn-link"
								type="submit"
								id="del_filter"
								name="del_filter"
								value="{{ GetMessage('CT_BCSF_DEL_FILTER') }}"
							/>
						</div>
					</div>
				</div>
			</div>
			<div class="clb"></div>
		</form>
	</div>
</div>