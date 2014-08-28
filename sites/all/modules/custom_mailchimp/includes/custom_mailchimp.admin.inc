<?php
function custom_mailchimp_admin_search($form, &$form_state)
{
  $form['q'] = array(
    '#type' => 'textfield',
    '#title' => t('Search query'),
    '#required' => TRUE,
  );
  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Search')
  );

  if (isset($form_state['input']['q']) && trim($form_state['input']['q']))
  {
    $mcapi = mailchimp_get_api_object();
    $result = $mcapi->helper->searchMembers($form_state['input']['q']);
    $members = array_merge($result['full_search']['members'], $result['exact_matches']['members']);
    $table = array();
    $table['header'] = array('Email address', 'First name', 'Last Name', 'List', 'Status');
    $table['rows'] = array();
    foreach ($members as $member)
    {
      $listName = 'Other';
      if ($member['list_id'] == '8d8a45aac4')
      {
          $listName = 'Express Consent';
      }
      else if ($member['list_id'] == 'e08523d085')
      {
          $listName = 'Implied Consent';
      }

      $table['rows'][] = array($member['email'], $member['merges']['FNAME'], $member['merges']['LNAME'], $listName, $member['status']);
    }
    $form['results']['#markup'] = '<p>Search results for: '.$form_state['input']['q'].'</p>'.theme('table', $table);
  }

  return $form;
}

function custom_mailchimp_admin_search_submit($form, &$form_state)
{
    $form_state['redirect'] = FALSE;
}
