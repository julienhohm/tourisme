<section class="section">
	<div class="container">
		<div class="columns is-multiline">
			<div class="column is-12">
				<h1 class="title">{@tourisme~activity.title@}</h1>
			</div>
			<div class="column is-7">
				{form $form, 'form:saveActivity'}
					{formcontrols}
					<div class="field">
						{ctrl_label}
						<div class="control">
							{ctrl_control}						
						</div>
					</div>
					{/formcontrols}

					<div class="field">
						<div class="control">
							{formsubmit}
						</div>
					</div>
				{/form}
			</div>
		</div>
	</div>
</section>