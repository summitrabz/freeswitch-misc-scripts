<?php
$xmlstr = <<<XML
<?xml version="1.0"?>
<cdr core-uuid="8e67d722-fa25-11e4-a404-cb18ef41548e" switchname="ashish-desktop">
  <channel_data>
    <state>CS_REPORTING</state>
    <direction>inbound</direction>
    <state_number>11</state_number>
    <flags>0=1;1=1;3=1;37=1;38=1;40=1;43=1;53=1;74=1;111=1;112=1;116=1;118=1</flags>
    <caps>1=1;2=1;3=1;4=1;5=1;6=1</caps>
  </channel_data>
  <variables>
    <direction>inbound</direction>
    <uuid>361ab3a0-fb1f-11e4-a5cc-cb18ef41548e</uuid>
    <session_id>25</session_id>
    <sip_from_user>1001</sip_from_user>
    <sip_from_uri>1001@10.0.0.8</sip_from_uri>
    <sip_from_host>10.0.0.8</sip_from_host>
    <channel_name>sofia/internal/1001@10.0.0.8</channel_name>
    <ep_codec_string>opus@48000h@20i@2c,PCMU@8000h@20i@64000b,PCMA@8000h@20i@64000b,G722@8000h@20i@64000b</ep_codec_string>
    <sip_local_network_addr>192.168.1.35</sip_local_network_addr>
    <sip_network_ip>10.0.0.29</sip_network_ip>
    <sip_network_port>47956</sip_network_port>
    <sip_received_ip>10.0.0.29</sip_received_ip>
    <sip_received_port>47956</sip_received_port>
    <sip_via_protocol>udp</sip_via_protocol>
    <sip_authorized>true</sip_authorized>
    <Event-Name>REQUEST_PARAMS</Event-Name>
    <Core-UUID>8e67d722-fa25-11e4-a404-cb18ef41548e</Core-UUID>
    <FreeSWITCH-Hostname>ashish-desktop</FreeSWITCH-Hostname>
    <FreeSWITCH-Switchname>ashish-desktop</FreeSWITCH-Switchname>
    <FreeSWITCH-IPv4>10.0.0.8</FreeSWITCH-IPv4>
    <FreeSWITCH-IPv6>::1</FreeSWITCH-IPv6>
    <Event-Date-Local>2015-05-15 21:56:59</Event-Date-Local>
    <Event-Date-GMT>Fri, 15 May 2015 16:26:59 GMT</Event-Date-GMT>
    <Event-Date-Timestamp>1431707219831472</Event-Date-Timestamp>
    <Event-Calling-File>sofia.c</Event-Calling-File>
    <Event-Calling-Function>sofia_handle_sip_i_invite</Event-Calling-Function>
    <Event-Calling-Line-Number>9056</Event-Calling-Line-Number>
    <Event-Sequence>16003</Event-Sequence>
    <sip_number_alias>1001</sip_number_alias>
    <sip_auth_username>1001</sip_auth_username>
    <sip_auth_realm>10.0.0.8</sip_auth_realm>
    <number_alias>1001</number_alias>
    <requested_domain_name>10.0.0.8</requested_domain_name>
    <record_stereo>true</record_stereo>
    <default_gateway>example.com</default_gateway>
    <default_areacode>918</default_areacode>
    <transfer_fallback_extension>operator</transfer_fallback_extension>
    <toll_allow>domestic,international,local</toll_allow>
    <accountcode>1001</accountcode>
    <user_context>default</user_context>
    <effective_caller_id_name>Extension 1001</effective_caller_id_name>
    <effective_caller_id_number>1001</effective_caller_id_number>
    <outbound_caller_id_name>FreeSWITCH</outbound_caller_id_name>
    <outbound_caller_id_number>0000000000</outbound_caller_id_number>
    <callgroup>techsupport</callgroup>
    <user_name>1001</user_name>
    <domain_name>10.0.0.8</domain_name>
    <sip_from_user_stripped>1001</sip_from_user_stripped>
    <sofia_profile_name>internal</sofia_profile_name>
    <recovery_profile_name>internal</recovery_profile_name>
    <sip_req_user>9664</sip_req_user>
    <sip_req_uri>9664@10.0.0.8</sip_req_uri>
    <sip_req_host>10.0.0.8</sip_req_host>
    <sip_to_user>9664</sip_to_user>
    <sip_to_uri>9664@10.0.0.8</sip_to_uri>
    <sip_to_host>10.0.0.8</sip_to_host>
    <sip_contact_user>1001</sip_contact_user>
    <sip_contact_port>47956</sip_contact_port>
    <sip_contact_uri>1001@10.0.0.29:47956</sip_contact_uri>
    <sip_contact_host>10.0.0.29</sip_contact_host>
    <sip_via_host>10.0.0.29</sip_via_host>
    <sip_via_port>47956</sip_via_port>
    <sip_via_rport>47956</sip_via_rport>
    <max_forwards>70</max_forwards>
    <presence_id>1001@10.0.0.8</presence_id>
    <switch_r_sdp>v=0
o=- 13076180818001738 1 IN IP4 10.0.0.29
s=X-Lite release 4.7.1 stamp 74247
c=IN IP4 10.0.0.29
t=0 0
m=audio 60596 RTP/AVP 125 100 0 8 9 101
a=rtpmap:125 opus/48000/2
a=fmtp:125 useinbandfec=1
a=rtpmap:100 speex/16000
a=rtpmap:101 telephone-event/8000
a=fmtp:101 0-15
</switch_r_sdp>
    <DP_MATCH>DELAYED NEGOTIATION</DP_MATCH>
    <DP_MATCH>DELAYED NEGOTIATION</DP_MATCH>
    <call_uuid>361ab3a0-fb1f-11e4-a5cc-cb18ef41548e</call_uuid>
    <RFC2822_DATE>Fri, 15 May 2015 21:57:09 +0530</RFC2822_DATE>
    <export_vars>RFC2822_DATE</export_vars>
    <zrtp_secure_media>true</zrtp_secure_media>
    <rtp_use_codec_string>OPUS,G722,PCMU,PCMA,GSM</rtp_use_codec_string>
    <rtp_audio_recv_pt>125</rtp_audio_recv_pt>
    <rtp_use_codec_name>opus</rtp_use_codec_name>
    <rtp_use_codec_fmtp>useinbandfec=1</rtp_use_codec_fmtp>
    <rtp_use_codec_rate>48000</rtp_use_codec_rate>
    <rtp_use_codec_ptime>20</rtp_use_codec_ptime>
    <rtp_use_codec_channels>1</rtp_use_codec_channels>
    <rtp_last_audio_codec_string>opus@48000h@20i@1c</rtp_last_audio_codec_string>
    <read_codec>opus</read_codec>
    <original_read_codec>opus</original_read_codec>
    <read_rate>48000</read_rate>
    <original_read_rate>48000</original_read_rate>
    <write_codec>opus</write_codec>
    <write_rate>48000</write_rate>
    <dtmf_type>rfc2833</dtmf_type>
    <local_media_ip>10.0.0.8</local_media_ip>
    <local_media_port>25802</local_media_port>
    <advertised_media_ip>10.0.0.8</advertised_media_ip>
    <rtp_use_timer_name>soft</rtp_use_timer_name>
    <rtp_use_pt>125</rtp_use_pt>
    <rtp_use_ssrc>185372131</rtp_use_ssrc>
    <rtp_2833_send_payload>101</rtp_2833_send_payload>
    <rtp_2833_recv_payload>101</rtp_2833_recv_payload>
    <remote_media_ip>10.0.0.29</remote_media_ip>
    <remote_media_port>60596</remote_media_port>
    <rtp_local_sdp_str>v=0
o=FreeSWITCH 1431681427 1431681428 IN IP4 10.0.0.8
s=FreeSWITCH
c=IN IP4 10.0.0.8
t=0 0
m=audio 25802 RTP/AVP 125 101
a=rtpmap:125 opus/48000/2
a=fmtp:125 useinbandfec=1
a=rtpmap:101 telephone-event/8000
a=fmtp:101 0-16
a=ptime:20
a=sendrecv
</rtp_local_sdp_str>
    <endpoint_disposition>ANSWER</endpoint_disposition>
    <sip_to_tag>2a28FgSmDp1tr</sip_to_tag>
    <sip_from_tag>f92e5207</sip_from_tag>
    <sip_cseq>2</sip_cseq>
    <sip_call_id>NTJhNzAxMWVmNTJmMDQzOWFhNjlmYTdjYWEwM2M0Y2U</sip_call_id>
    <sip_full_via>SIP/2.0/UDP 10.0.0.29:47956;branch=z9hG4bK-d8754z-86b9bb69ef7b6707-1---d8754z-;rport=47956</sip_full_via>
    <sip_full_from><sip:1001@10.0.0.8>;tag=f92e5207</sip_full_from>
    <sip_full_to><sip:9664@10.0.0.8>;tag=2a28FgSmDp1tr</sip_full_to>
    <current_application_data>local_stream://moh</current_application_data>
    <current_application>playback</current_application>
    <sip_term_status>200</sip_term_status>
    <proto_specific_hangup_cause>sip:200</proto_specific_hangup_cause>
    <sip_term_cause>16</sip_term_cause>
    <sip_user_agent>X-Lite 4.7.1 74247-22df0a54-W6.1</sip_user_agent>
    <sip_hangup_disposition>recv_bye</sip_hangup_disposition>
    <playback_last_offset_pos>288960</playback_last_offset_pos>
    <playback_seconds>6</playback_seconds>
    <playback_ms>6026</playback_ms>
    <playback_samples>289280</playback_samples>
    <current_application_response>PLAYBACK ERROR</current_application_response>
    <hangup_cause>NORMAL_CLEARING</hangup_cause>
    <hangup_cause_q850>16</hangup_cause_q850>
    <digits_dialed>none</digits_dialed>
    <start_stamp>2015-05-15 21:56:59</start_stamp>
    <profile_start_stamp>2015-05-15 21:56:59</profile_start_stamp>
    <answer_stamp>2015-05-15 21:57:09</answer_stamp>
    <progress_media_stamp>2015-05-15 21:57:09</progress_media_stamp>
    <end_stamp>2015-05-15 21:57:17</end_stamp>
    <start_epoch>1431707219</start_epoch>
    <start_uepoch>1431707219831472</start_uepoch>
    <profile_start_epoch>1431707219</profile_start_epoch>
    <profile_start_uepoch>1431707219831472</profile_start_uepoch>
    <answer_epoch>1431707229</answer_epoch>
    <answer_uepoch>1431707229851472</answer_uepoch>
    <bridge_epoch>0</bridge_epoch>
    <bridge_uepoch>0</bridge_uepoch>
    <last_hold_epoch>0</last_hold_epoch>
    <last_hold_uepoch>0</last_hold_uepoch>
    <hold_accum_seconds>0</hold_accum_seconds>
    <hold_accum_usec>0</hold_accum_usec>
    <hold_accum_ms>0</hold_accum_ms>
    <resurrect_epoch>0</resurrect_epoch>
    <resurrect_uepoch>0</resurrect_uepoch>
    <progress_epoch>0</progress_epoch>
    <progress_uepoch>0</progress_uepoch>
    <progress_media_epoch>1431707229</progress_media_epoch>
    <progress_media_uepoch>1431707229851472</progress_media_uepoch>
    <end_epoch>1431707237</end_epoch>
    <end_uepoch>1431707237871473</end_uepoch>
    <last_app>playback</last_app>
    <last_arg>local_stream://moh</last_arg>
    <caller_id>"1001" <1001></caller_id>
    <duration>18</duration>
    <billsec>8</billsec>
    <progresssec>0</progresssec>
    <answersec>10</answersec>
    <waitsec>0</waitsec>
    <progress_mediasec>10</progress_mediasec>
    <flow_billsec>18</flow_billsec>
    <mduration>18040</mduration>
    <billmsec>8020</billmsec>
    <progressmsec>0</progressmsec>
    <answermsec>10020</answermsec>
    <waitmsec>0</waitmsec>
    <progress_mediamsec>10020</progress_mediamsec>
    <flow_billmsec>18040</flow_billmsec>
    <uduration>18040001</uduration>
    <billusec>8020001</billusec>
    <progressusec>0</progressusec>
    <answerusec>10020000</answerusec>
    <waitusec>0</waitusec>
    <progress_mediausec>10020000</progress_mediausec>
    <flow_billusec>18040001</flow_billusec>
    <rtp_audio_in_raw_bytes>43299</rtp_audio_in_raw_bytes>
    <rtp_audio_in_media_bytes>43299</rtp_audio_in_media_bytes>
    <rtp_audio_in_packet_count>312</rtp_audio_in_packet_count>
    <rtp_audio_in_media_packet_count>312</rtp_audio_in_media_packet_count>
    <rtp_audio_in_skip_packet_count>92</rtp_audio_in_skip_packet_count>
    <rtp_audio_in_jitter_packet_count>0</rtp_audio_in_jitter_packet_count>
    <rtp_audio_in_dtmf_packet_count>0</rtp_audio_in_dtmf_packet_count>
    <rtp_audio_in_cng_packet_count>0</rtp_audio_in_cng_packet_count>
    <rtp_audio_in_flush_packet_count>0</rtp_audio_in_flush_packet_count>
    <rtp_audio_in_largest_jb_size>0</rtp_audio_in_largest_jb_size>
    <rtp_audio_in_jitter_min_variance>10.96</rtp_audio_in_jitter_min_variance>
    <rtp_audio_in_jitter_max_variance>400.00</rtp_audio_in_jitter_max_variance>
    <rtp_audio_in_jitter_loss_rate>0.00</rtp_audio_in_jitter_loss_rate>
    <rtp_audio_in_jitter_burst_rate>1.00</rtp_audio_in_jitter_burst_rate>
    <rtp_audio_in_mean_interval>20.41</rtp_audio_in_mean_interval>
    <rtp_audio_in_flaw_total>1</rtp_audio_in_flaw_total>
    <rtp_audio_in_quality_percentage>99.00</rtp_audio_in_quality_percentage>
    <rtp_audio_in_mos>4.49</rtp_audio_in_mos>
    <rtp_audio_out_raw_bytes>43737</rtp_audio_out_raw_bytes>
    <rtp_audio_out_media_bytes>43737</rtp_audio_out_media_bytes>
    <rtp_audio_out_packet_count>400</rtp_audio_out_packet_count>
    <rtp_audio_out_media_packet_count>400</rtp_audio_out_media_packet_count>
    <rtp_audio_out_skip_packet_count>0</rtp_audio_out_skip_packet_count>
    <rtp_audio_out_dtmf_packet_count>0</rtp_audio_out_dtmf_packet_count>
    <rtp_audio_out_cng_packet_count>0</rtp_audio_out_cng_packet_count>
    <rtp_audio_rtcp_packet_count>0</rtp_audio_rtcp_packet_count>
    <rtp_audio_rtcp_octet_count>0</rtp_audio_rtcp_octet_count>
  </variables>
  <app_log>
    <application app_name="log" app_data="CRIT WARNING WARNING WARNING WARNING WARNING WARNING WARNING WARNING WARNING " app_stamp="1431707219850593"></application>
    <application app_name="log" app_data="CRIT Open /usr/local/freeswitch/conf/vars.xml and change the default_password." app_stamp="1431707219851031"></application>
    <application app_name="log" app_data="CRIT Once changed type 'reloadxml' at the console." app_stamp="1431707219851368"></application>
    <application app_name="log" app_data="CRIT WARNING WARNING WARNING WARNING WARNING WARNING WARNING WARNING WARNING " app_stamp="1431707219851603"></application>
    <application app_name="sleep" app_data="10000" app_stamp="1431707219851794"></application>
    <application app_name="hash" app_data="insert/10.0.0.8-spymap/1001/361ab3a0-fb1f-11e4-a5cc-cb18ef41548e" app_stamp="1431707229864688"></application>
    <application app_name="hash" app_data="insert/10.0.0.8-last_dial/1001/9664" app_stamp="1431707229865040"></application>
    <application app_name="hash" app_data="insert/10.0.0.8-last_dial/global/361ab3a0-fb1f-11e4-a5cc-cb18ef41548e" app_stamp="1431707229865381"></application>
    <application app_name="export" app_data="RFC2822_DATE=Fri, 15 May 2015 21:57:09 +0530" app_stamp="1431707229865765"></application>
    <application app_name="set" app_data="zrtp_secure_media=true" app_stamp="1431707229866060"></application>
    <application app_name="answer" app_data="" app_stamp="1431707229866352"></application>
    <application app_name="playback" app_data="silence_stream://2000" app_stamp="1431707229871905"></application>
    <application app_name="execute_extension" app_data="is_zrtp_secure XML features" app_stamp="1431707231869012"></application>
    <application app_name="eval" app_data="not_secure" app_stamp="1431707231869954"></application>
    <application app_name="playback" app_data="local_stream://moh" app_stamp="1431707231870537"></application>
  </app_log>
  <callflow dialplan="XML" unique-id="361e0b68-fb1f-11e4-a5ce-cb18ef41548e" profile_index="1">
    <extension name="global" number="9664">
      <application app_name="log" app_data="CRIT WARNING WARNING WARNING WARNING WARNING WARNING WARNING WARNING WARNING "></application>
      <application app_name="log" app_data="CRIT Open /usr/local/freeswitch/conf/vars.xml and change the default_password."></application>
      <application app_name="log" app_data="CRIT Once changed type 'reloadxml' at the console."></application>
      <application app_name="log" app_data="CRIT WARNING WARNING WARNING WARNING WARNING WARNING WARNING WARNING WARNING "></application>
      <application app_name="sleep" app_data="10000"></application>
      <application app_name="hash" app_data="insert/${domain_name}-spymap/${caller_id_number}/${uuid}"></application>
      <application app_name="hash" app_data="insert/${domain_name}-last_dial/${caller_id_number}/${destination_number}"></application>
      <application app_name="hash" app_data="insert/${domain_name}-last_dial/global/${uuid}"></application>
      <application app_name="export" app_data="RFC2822_DATE=${strftime(%a, %d %b %Y %T %z)}"></application>
      <application app_name="set" app_data="zrtp_secure_media=true"></application>
      <application app_name="answer" app_data=""></application>
      <application app_name="playback" app_data="silence_stream://2000"></application>
      <application app_name="execute_extension" app_data="is_zrtp_secure XML features"></application>
      <application app_name="playback" app_data="local_stream://moh"></application>
      <sub_extensions>
        <extension name="is_zrtp_secure" number="is_zrtp_secure" dialplan="XML">
          <application app_name="eval" app_data="not_secure"></application>
        </extension>
      </sub_extensions>
    </extension>
    <caller_profile>
      <username>1001</username>
      <dialplan>XML</dialplan>
      <caller_id_name>1001</caller_id_name>
      <caller_id_number>1001</caller_id_number>
      <callee_id_name></callee_id_name>
      <callee_id_number></callee_id_number>
      <ani>1001</ani>
      <aniii></aniii>
      <network_addr>10.0.0.29</network_addr>
      <rdnis></rdnis>
      <destination_number>9664</destination_number>
      <uuid>361ab3a0-fb1f-11e4-a5cc-cb18ef41548e</uuid>
      <source>mod_sofia</source>
      <context>default</context>
      <chan_name>sofia/internal/1001@10.0.0.8</chan_name>
    </caller_profile>
    <times>
      <created_time>1431707219831472</created_time>
      <profile_created_time>1431707219831472</profile_created_time>
      <progress_time>0</progress_time>
      <progress_media_time>1431707229851472</progress_media_time>
      <answered_time>1431707229851472</answered_time>
      <bridged_time>0</bridged_time>
      <last_hold_time>0</last_hold_time>
      <hold_accum_time>0</hold_accum_time>
      <hangup_time>1431707237871473</hangup_time>
      <resurrect_time>0</resurrect_time>
      <transfer_time>0</transfer_time>
    </times>
  </callflow>
</cdr>
XML;
?>
