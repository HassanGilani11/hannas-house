<?php
namespace Element_Ready_Pro\Widgets\user;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

use Elementor\Group_Control_Border;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Box_Shadow;
use Element_Ready\Widget_Controls\User_Style;

if ( ! defined( 'ABSPATH' ) ) exit;


class Signin_SignUp extends Widget_Base {

     use User_Style;
    public $base;

    public function get_name() {
        return 'element-ready-user-sign-signup-popup';
    }

    public function get_keywords() {
		return ['element ready','popup user','signin','signup','registration','user'];
	}

    public function get_title() {
        return esc_html__( 'ER User SignIn SignUp', 'element-ready-pro' );
    }

    public function get_icon() { 
        return 'far fa-user';
    }

    public function get_categories() {
        return [ 'element-ready-pro' ];
    }
    public function get_script_depends() {
		return[
			'element-ready-core',
		];
	}
    public function get_style_depends() {

        wp_register_style( 'eready-popup' , ELEMENT_READY_ROOT_CSS. 'widgets/popup.css' );
        return [ 'eready-popup' ];
    }

    public function layout(){
        return[
            
            'style1'   => esc_html__( 'style1', 'element-ready-pro' ),
            'style2'   => esc_html__( 'Bootstrap style', 'element-ready-pro' ),
            
        ];
    }
 
    protected function register_controls() {

        $this->start_controls_section(
			'menu_layout',
			[
				'label' => esc_html__( 'Layout', 'element-ready-pro' ),
			]
        );

        


            $this->add_control(
                '_style',
                [
                    'label' => esc_html__( 'Style', 'element-ready-pro' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'style1',
                    'options' => $this->layout()
                ]
            );

            $this->add_control(
                'modal_template_id',
                [
                    'label'     => esc_html__( 'Select Content Template', 'element-ready-pro' ),
                    'type'      => Controls_Manager::SELECT,
                    'default'   => '0',
                    'options'   => element_ready_elementor_template(),
                    'description' => esc_html__( 'Please select elementor templete from here, if not create elementor template from menu', 'element-ready-pro' )
                   
                ]
            );

            $this->add_control(
                'modal_heading_text',
                [
    
                    'label' => esc_html__( 'Modal Heading Text', 'element-ready-pro' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'placeholder' => esc_html__( 'Heading', 'element-ready-pro' ),
                    'default' => esc_html__('Logo','element-ready-pro'),
                    'condition' => [
                        '_style' => ['style2']
                    ],
                    
                ]
            );

            $this->add_control(
                'modal_footer_text',
                [
    
                    'label' => esc_html__( 'Modal footer Text', 'element-ready-pro' ),
                    'type' => \Elementor\Controls_Manager::WYSIWYG,
                    'placeholder' => esc_html__( 'footer text', 'element-ready-pro' ),
                    'default' => esc_html__('footer text','element-ready-pro'),
                    'condition' => [
                        '_style' => ['style2']
                    ],
                    
                ]
            );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_interface_fields',
            [
                'label' => esc_html__('Interface', 'element-ready-pro'),
            ]
        );

            
            $this->add_control(
                'interface_icon',
                [
                    'label' => esc_html__( 'Icon', 'element-ready-pro' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'default' => [
                        'value' => 'fas fa-user',
                        'library' => 'solid',
                    ],
                ]
            );

            $this->add_control(
                'interface_text',
                [
    
                    'label' => esc_html__( 'Text', 'element-ready-pro' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'placeholder' => esc_html__( 'Login', 'element-ready-pro' ),
                    'default' => esc_html__('login','element-ready-pro')
                    
                ]
            );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_interface_tabs',
            [
                'label' => esc_html__('Tabs / Column', 'element-ready-pro'),
                // 'condition' => [
                //     '_style' => ['style1']
                // ],
            ]
        );

            $this->add_control(
                'tab_one_enable',
                [
                    'label'        => esc_html__( 'Login Enable', 'element-ready-pro' ),
                    'type'         => \Elementor\Controls_Manager::SWITCHER,
                    'label_on'     => esc_html__( 'Show', 'element-ready-pro' ),
                    'label_off'    => esc_html__( 'Hide', 'element-ready-pro' ),
                    'return_value' => 'yes',
                    'default'      => 'yes',
                ]
            );

            $this->add_control(
                'tab_one_text',
                [
    
                    'label' => esc_html__( 'Login Text', 'element-ready-pro' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'placeholder' => esc_html__( 'Login', 'element-ready-pro' ),
                    'default' => esc_html__('Login','element-ready-pro'),
                    'condition' => [
                        'tab_one_enable' => ['yes']
                    ],
                    
                ]
            );

            
            $this->add_control(
                'login_column',
                [
                    'label' => esc_html__( 'Column', 'bisy-essential' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '6', 
                    'options' => [
                        '6'    => esc_html__( '6 Column', 'bisy-essential' ),
                        '5'    => esc_html__( '5 Column', 'bisy-essential' ),
                        '4'    => esc_html__( '4 Column', 'bisy-essential' ),
                        '3'    => esc_html__( '3 Column', 'bisy-essential' ),
                        '2'    => esc_html__( '2 Column', 'bisy-essential' ),
                        '7'    => esc_html__( '7 Column', 'bisy-essential' ),
                        '8'    => esc_html__( '8 Column', 'bisy-essential' ),
                        '9'    => esc_html__( '9 Column', 'bisy-essential' ),
                        '10'    => esc_html__( '10 Column', 'bisy-essential' ),
                        '11'    => esc_html__( '11 Column', 'bisy-essential' ),
                        '12'   => esc_html__( 'Full width', 'bisy-essential' ),
                    
                    ],
                    'condition' => [
                        'tab_one_enable' => ['yes']
                    ],
                ]
            );

            $this->add_control(
                'tab_two_enable',
                [
                    'label'        => esc_html__( 'Registration Enable', 'element-ready-pro' ),
                    'type'         => \Elementor\Controls_Manager::SWITCHER,
                    'label_on'     => esc_html__( 'Show', 'element-ready-pro' ),
                    'label_off'    => esc_html__( 'Hide', 'element-ready-pro' ),
                    'return_value' => 'yes',
                    'default'      => 'yes',
                ]
            );
            $this->add_control(
                'tab_two_text',
                [
    
                    'label' => esc_html__( 'Registration Text', 'element-ready-pro' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'placeholder' => esc_html__( 'Registration', 'element-ready-pro' ),
                    'default' => esc_html__('Register','element-ready-pro'),
                    'condition' => [
                        'tab_two_enable' => ['yes']
                    ],
                ]
            );

            $this->add_control(
                'signup_column',
                [
                    'label' => esc_html__( 'Column', 'bisy-essential' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '6', 
                    'options' => [
                        '6'    => esc_html__( '6 Column', 'bisy-essential' ),
                        '5'    => esc_html__( '5 Column', 'bisy-essential' ),
                        '4'    => esc_html__( '4 Column', 'bisy-essential' ),
                        '3'    => esc_html__( '3 Column', 'bisy-essential' ),
                        '2'    => esc_html__( '2 Column', 'bisy-essential' ),
                        '7'    => esc_html__( '7 Column', 'bisy-essential' ),
                        '8'    => esc_html__( '8 Column', 'bisy-essential' ),
                        '9'    => esc_html__( '9 Column', 'bisy-essential' ),
                        '10'    => esc_html__( '10 Column', 'bisy-essential' ),
                        '11'    => esc_html__( '11 Column', 'bisy-essential' ),
                        '12'   => esc_html__( 'Full width', 'bisy-essential' ),
                    
                    ],
                    'condition' => [
                        'tab_two_enable' => ['yes']
                    ],
                ]
            );

            $this->add_responsive_control(
                '_section_tab__section_pos_hide_display_direction',
                [
                    'label' => esc_html__( 'Display Direction', 'element-ready-pro' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'row-reverse'    => esc_html__( 'Row Reverse', 'element-ready-pro' ),
                        'column-reverse' => esc_html__( 'Column Reverse', 'element-ready-pro' ),
                        'row'            => esc_html__( 'Row', 'element-ready-pro' ),
                        'column'         => esc_html__( 'Column', 'element-ready-pro' ),
                        'revert'         => esc_html__( 'Revert', 'element-ready-pro' ),
                        ''           => esc_html__( 'None', 'element-ready-pro' ),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .header-user-form-tabs .nav-tabs' => 'flex-direction: {{VALUE}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'tab_container_section_alignment', [
                    'label'   => esc_html__( 'Alignment', 'element-ready-pro' ),
                    'type'    => Controls_Manager::CHOOSE,
                    'options' => [
    
                'flex-start'		 => [
                    
                    'title' => esc_html__( 'Left', 'element-ready-pro' ),
                    'icon'  => 'fa fa-align-left',
                
                ],
                    'center'	     => [
                    
                    'title' => esc_html__( 'Center', 'element-ready-pro' ),
                    'icon'  => 'fa fa-align-center',
                
                ],
                'flex-end'	 => [
    
                    'title' => esc_html__( 'Right', 'element-ready-pro' ),
                    'icon'  => 'fa fa-align-right',
                    
                ],
                
                'justify'	 => [
    
                'title' => esc_html__( 'Justified', 'element-ready-pro' ),
                'icon'  => 'fa fa-align-justify',
                
                        ],
                ],
                'default' => '',
                
                'selectors' => [
                        '{{WRAPPER}} .header-user-form-tabs .nav-tabs'   => 'justify-content: {{VALUE}};',
                       
                    ],
                ]
            );//Responsive control end

        $this->end_controls_section();

       $this->icon_css(esc_html__('Interface Icon Style','element-ready-pro'));
       $this->interface_text_css(esc_html__('Interface Text Style','element-ready-pro'),'interface_text');
       $this->popup_css(esc_html__('PopUp box','element-ready-pro'),'popup_box_cont','pop_box_element');
       $this->login_button_css(esc_html__('Login Button','element-ready-pro'),'login_button_cont','login_button__element');
       $this->registration_button_css(esc_html__('Registration Button','element-ready-pro'),'reg_button_cont','reg_button__element');
       $this->lost_pass_button_css(esc_html__('Lost Password','element-ready-pro'),'lost_pass__cont','lost_password__element');
       $this->modal_heading_css(esc_html__('Modal heading','element-ready-pro'),'modal_heading__cont','modal_heading__element');
       $this->modal_footer_css(esc_html__('Modal Footer','element-ready-pro'),'modal_footer__cont','modal_footer__element');

        $this->start_controls_section(
            'section_fields',
            [
                'label' => esc_html__('Login Fields', 'element-ready-pro'),
            ]
        );
  

       
        $this->add_control(
            'login_username_placeholder', [
                'label'			  => esc_html__( 'Username placeholder', 'element-ready-pro' ),
                'type'			  => Controls_Manager::TEXT,
                'label_block'	  => true,
                'placeholder'    => esc_html__( 'username ', 'element-ready-pro' ),
                'default'	     => esc_html__( 'Username ', 'element-ready-pro' ),
            
                
            ]
        );
      

        $this->add_control(
            'login_password_placeholder', [
                'label'			  => esc_html__( 'Password placeholder', 'element-ready-pro' ),
                'type'			  => Controls_Manager::TEXT,
                'label_block'	  => true,
                'placeholder'    => esc_html__( 'password ', 'element-ready-pro' ),
                'default'	     => esc_html__( 'password ', 'element-ready-pro' ),
            
                
            ]
        );

       
        $this->add_control(
            'login_submit_text', [
                'label'			  => esc_html__( 'Submit text', 'element-ready-pro' ),
                'type'			  => Controls_Manager::TEXT,
                'label_block'	  => true,
                'placeholder'    => esc_html__( 'Submit ', 'element-ready-pro' ),
                'default'	     => esc_html__( 'Login', 'element-ready-pro' ),
            
                
            ]
        );
     
        $this->end_controls_section();

        $this->start_controls_section(
            'section_remenber_content',
            [
                'label' => esc_html__('Login Remember ', 'element-ready-pro'),
            ]
        );

                $this->add_control(
                    'remember_show',
                    [
                        'label'        => esc_html__( 'show', 'element-ready-pro' ),
                        'type'         => Controls_Manager::SWITCHER,
                        'label_on'     => esc_html__( 'Yes', 'element-ready-pro' ),
                        'label_off'    => esc_html__( 'No', 'element-ready-pro' ),
                        'return_value' => 'yes',
                        'default'      => 'yes',
                    ]
                );
            
                $this->add_control(
                    'remember_text',
                    [
                        'label'       => esc_html__( 'Title', 'element-ready-pro' ),
                        'type'        => \Elementor\Controls_Manager::TEXTAREA,
                        'default'     => esc_html__( 'Remember Me', 'element-ready-pro' ),
                        'placeholder' => esc_html__( 'Type your title here', 'element-ready-pro' ),
                    ]
                );
        
         $this->end_controls_section();

         
        $this->start_controls_section(
            'section_lost_password__content',
            [
                'label' => esc_html__('Login Lost Password ', 'element-ready-pro'),
            ]
        );

                $this->add_control(
                    'lost_password_show',
                    [
                        'label'        => esc_html__( 'show', 'element-ready-pro' ),
                        'type'         => Controls_Manager::SWITCHER,
                        'label_on'     => esc_html__( 'Yes', 'element-ready-pro' ),
                        'label_off'    => esc_html__( 'No', 'element-ready-pro' ),
                        'return_value' => 'yes',
                        'default'      => 'yes',
                    ]
                );
            
                $this->add_control(
                    'lost_password_text',
                    [
                        'label'       => esc_html__( 'Title', 'element-ready-pro' ),
                        'type'        => \Elementor\Controls_Manager::TEXT,
                        'default'     => esc_html__( 'Remember Me', 'element-ready-pro' ),
                        'placeholder' => esc_html__( 'Type your title here', 'element-ready-pro' ),
                    ]
                );

                $this->add_control(
                    'lost_password_url',
                    [
                        'label'       => esc_html__( 'Link', 'element-ready-pro' ),
                        'type'        => \Elementor\Controls_Manager::URL,
                    ]
                );
        
         $this->end_controls_section();

         $this->start_controls_section(
            'section_registration_fields',
            [
                'label' => esc_html__('Registration Fields', 'element-ready-pro'),
            ]
        );

            $this->add_control(
                'signup_show_name',
                [
                    'label'        => esc_html__( 'Show Name', 'element-ready-pro' ),
                    'type'         => \Elementor\Controls_Manager::SWITCHER,
                    'label_on'     => esc_html__( 'Show', 'element-ready-pro' ),
                    'label_off'    => esc_html__( 'Hide', 'element-ready-pro' ),
                    'return_value' => 'yes',
                    'default'      => 'yes',
                ]
            );
 
            $this->add_control(
                'signup_name_placeholder', [
                    'label'			  => esc_html__( 'Name placeholder', 'element-ready-pro' ),
                    'type'			  => Controls_Manager::TEXT,
                    'label_block'	  => true,
                    'placeholder'    => esc_html__( 'name ', 'element-ready-pro' ),
                    'default'	     => esc_html__( 'Your Name ', 'element-ready-pro' ),
                    'condition' => [
                        'signup_show_name' => ['yes']
                    ],
                    
                ]
            );

            $this->add_control(
                'signup_username_placeholder', [
                    'label'			  => esc_html__( 'Username placeholder', 'element-ready-pro' ),
                    'type'			  => Controls_Manager::TEXT,
                    'label_block'	  => true,
                    'placeholder'    => esc_html__( 'username ', 'element-ready-pro' ),
                    'default'	     => esc_html__( 'Username ', 'element-ready-pro' ),
                    
                    
                ]
            );
      
            $this->add_control(
                'signup_email_placeholder', [
                    'label'			  => esc_html__( 'Email placeholder', 'element-ready-pro' ),
                    'type'			  => Controls_Manager::TEXT,
                    'label_block'	  => true,
                    'placeholder'    => esc_html__( 'user@somedomain.com ', 'element-ready-pro' ),
                    'default'	     => esc_html__( 'user@somedomain.com', 'element-ready-pro' ),
                
                    
                ]
            );
      
            $this->add_control(
                'signup_password_placeholder', [
                    'label'			  => esc_html__( 'Password placeholder', 'element-ready-pro' ),
                    'type'			  => Controls_Manager::TEXT,
                    'label_block'	  => true,
                    'placeholder'    => esc_html__( 'password ', 'element-ready-pro' ),
                    'default'	     => esc_html__( 'password ', 'element-ready-pro' ),
                
                    
                ]
            );

       
            $this->add_control(
                'signup_submit_text', [
                    'label'			  => esc_html__( 'Submit text', 'element-ready-pro' ),
                    'type'			  => Controls_Manager::TEXT,
                    'label_block'	  => true,
                    'placeholder'    => esc_html__( 'Submit ', 'element-ready-pro' ),
                    'default'	     => esc_html__( 'Register', 'element-ready-pro' ),
                
                    
                ]
            );
     
        $this->end_controls_section();

       
        $this->start_controls_section(
            '_remember_style_section',
            [
                'label' => esc_html__( 'Remember', 'element-ready-pro' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->add_responsive_control(
                'remember_btn_margin',
                [
                    'label'      => esc_html__( 'Margin', 'element-ready-pro' ),
                    'type'       => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 
                        'px', '%', 'em' ],
                    'selectors'  => [
                        '{{WRAPPER}} .form-checkbox' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        '{{WRAPPER}} .input-checkbox' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'remember_btn_padding',
                [
                    'label'      => esc_html__( 'Padding', 'element-ready-pro' ),
                    'type'       => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 
                        'px', '%', 'em' ],
                    'selectors'  => [
                        '{{WRAPPER}} .form-checkbox span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        '{{WRAPPER}} .element-ready-modal-checkbox span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography:: get_type(),
                [
                    'name'     => 'remember_box_typography',
                 
                    'selector' => '{{WRAPPER}} .form-checkbox span,{{WRAPPER}} .element-ready-modal-checkbox span',
                    
                ]
            );

            $this->add_control(
                'remember_box_text_color',
                [
                    'label'     => esc_html__( 'Text Color', 'element-ready-pro' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .form-checkbox span'  => 'color:{{VALUE}};',
                        '{{WRAPPER}} .element-ready-modal-checkbox span'  => 'color:{{VALUE}};',
                    ],
                ]
            );

           

            $this->add_control(
                'remember_box_check_color',
                [
                    'label'     => esc_html__( 'Checkbox Color', 'element-ready-pro' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .form-checkbox span::before'  => 'border-color:{{VALUE}};',
                        '{{WRAPPER}} .element-ready-modal-checkbox .input-checkbox'  => 'border-color:{{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'remember_box_check_bgcolor',
                [
                    'label'     => esc_html__( 'Check box bgColor', 'element-ready-pro' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .form-checkbox span::before'  => 'background:{{VALUE}};',
                        '{{WRAPPER}} .element-ready-modal-checkbox .input-checkbox'  => 'background:{{VALUE}};',
                    ],
                ]
            );
            $this->add_group_control(
                Group_Control_Border:: get_type(),
                [
                    'name'     => 'remember_box_check_border',
                    'label'    => esc_html__( 'Border', 'element-ready-pro' ),
                    'selector' => '{{WRAPPER}} .form-checkbox span::before,{{WRAPPER}} .element-ready-modal-checkbox .input-checkbox',
                     
                    
                ]
            );
        $this->end_controls_section();
        //
     
        
        /*---------------------------
            INPUT FIELD STYLE TAB START
        ----------------------------*/
        $this->start_controls_section(
            '_tform_input_style_section',
            [
                'label' => esc_html__( 'Input', 'element-ready-pro' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs( 'input_box_tabs' );
                $this->start_controls_tab(
                    'input_box_normal_tab',
                    [
                        'label' => esc_html__( 'Normal', 'element-ready-pro' ),
                    ]
                );
                    $this->add_responsive_control(
                        'input_box_height',
                        [
                            'label'      => esc_html__( 'Height', 'element-ready-pro' ),
                            'type'       => Controls_Manager::SLIDER,
                            'size_units' => [ 'px', '%' ],
                            'range'      => [
                                'px' => [
                                    'max' => 150,
                                ],
                            ],
                            'default' => [
                                'size' => 55,
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .input-text'   => 'height:{{SIZE}}{{UNIT}};',
                                '{{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text'   => 'height:{{SIZE}}{{UNIT}};',
                           
                               
                            ],
                        ]
                    );
                    $this->add_responsive_control(
                        'input_box_width',
                        [
                            'label'      => esc_html__( 'Width', 'element-ready-pro' ),
                            'type'       => Controls_Manager::SLIDER,
                            'size_units' => [ 'px', '%' ],
                            'range'      => [
                                'px' => [
                                    'min'  => 0,
                                    'max'  => 1000,
                                    'step' => 1,
                                ],
                                '%' => [
                                    'min' => 0,
                                    'max' => 100,
                                ],
                            ],
                            'default' => [
                                'unit' => '%',
                                'size' => 100,
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .input-text'=> 'width:{{SIZE}}{{UNIT}};',
                                '{{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text'=> 'width:{{SIZE}}{{UNIT}};',
                         
                            ],
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name'     => 'input_box_typography',
                          
                            'selector' => '{{WRAPPER}} .input-text,{{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box',
                              
                        ]
                    );

                    $this->add_control(
                        'input_box_text_color',
                        [
                            'label'     => esc_html__( 'Text Color', 'element-ready-pro' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .input-text'  => 'color:{{VALUE}};',
                                '{{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text'  => 'color:{{VALUE}};',
                              
                        
                            ],
                        ]
                    );

                    $this->add_control(
                        'input_box_bgtext_color',
                        [
                            'label'     => esc_html__( 'Background Color', 'element-ready-pro' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .input-text'  => 'Background:{{VALUE}} !important;',
                                '{{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text'  => 'Background:{{VALUE}} !important;',
                              
                        
                            ],
                        ]
                    );
                   
                    $this->add_control(
                        'input_box_placeholder_color',
                        [
                            'label'     => esc_html__( 'Placeholder Color', 'element-ready-pro' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .input-text::-webkit-input-placeholder'   => 'color: {{VALUE}};',
                                '{{WRAPPER}} .input-text::-moz-placeholder'            => 'color: {{VALUE}};',
                                '{{WRAPPER}} .input-text:-ms-input-placeholder'        => 'color: {{VALUE}};',
                                '{{WRAPPER}} .input-text::-webkit-input-placeholder'  => 'color: {{VALUE}};',
                                '{{WRAPPER}} .input-text::-moz-placeholder'           => 'color: {{VALUE}};',
                                '{{WRAPPER}} .input-text:-ms-input-placeholder'       => 'color: {{VALUE}};',
                                '{{WRAPPER}} .input-text::-webkit-input-placeholder'    => 'color: {{VALUE}};',
                                '{{WRAPPER}} .input-text::-moz-placeholder'             => 'color: {{VALUE}};',
                                '{{WRAPPER}} .input-text:-ms-input-placeholder'         => 'color: {{VALUE}};',
                                '{{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text::-webkit-input-placeholder'   => 'color: {{VALUE}};',
                                '{{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text::-moz-placeholder'            => 'color: {{VALUE}};',
                                '{{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text:-ms-input-placeholder'        => 'color: {{VALUE}};',
                                '{{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text::-webkit-input-placeholder'  => 'color: {{VALUE}};',
                                '{{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text::-moz-placeholder'           => 'color: {{VALUE}};',
                                '{{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text:-ms-input-placeholder'       => 'color: {{VALUE}};',
                                '{{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text::-webkit-input-placeholder'    => 'color: {{VALUE}};',
                                '{{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text::-moz-placeholder'             => 'color: {{VALUE}};',
                                '{{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text:-ms-input-placeholder'         => 'color: {{VALUE}};',
                                
                            ],
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => 'input_box_border',
                            'label'    => esc_html__( 'Border', 'element-ready-pro' ),
                            'selector' => ' {{WRAPPER}} .input-text, {{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text',
                             
                            
                        ]
                    );
                    $this->add_responsive_control(
                        'input_box_border_radius',
                        [
                            'label'     => esc_html__( 'Border Radius', 'element-ready-pro' ),
                            'type'      => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .input-text' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                                '{{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                             ],
                            'separator' => 'before',
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Box_Shadow:: get_type(),
                        [
                            'name'     => 'input_box_shadow',
                            'selector' => '{{WRAPPER}} .input-text',   
                            
                        ]
                    );
                    $this->add_responsive_control(
                        'input_box_padding',
                        [
                            'label'      => esc_html__( 'Padding', 'element-ready-pro' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}}  .input-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                              
                            ],
                            'separator' => 'before',
                        ]
                    );
                    $this->add_responsive_control(
                        'input_box_margin',
                        [
                            'label'      => esc_html__( 'Margin', 'element-ready-pro' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .input-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
               
                            ],
                            'separator' => 'before',
                        ]
                    );
                    $this->add_control(
                        'input_box_transition',
                        [
                            'label'      => esc_html__( 'Transition', 'element-ready-pro' ),
                            'type'       => Controls_Manager::SLIDER,
                            'size_units' => [ 'px' ],
                            'range'      => [
                                'px' => [
                                    'min'  => 0.1,
                                    'max'  => 3,
                                    'step' => 0.1,
                                ],
                            ],
                            'default' => [
                                'unit' => 'px',
                                'size' => 0.3,
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .input-text'   => 'transition: {{SIZE}}s;',
                                '{{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text'   => 'transition: {{SIZE}}s;',
                           

                            ],
                        ]
                    );
                $this->end_controls_tab();
                $this->start_controls_tab(
                    'input_box_hover_tabs',
                    [
                        'label' => esc_html__( 'Focus', 'element-ready-pro' ),
                    ]
                );
                $this->add_control(
                    'input_box_hover_color',
                    [
                        'label'     => esc_html__( 'Text Color', 'element-ready-pro' ),
                        'type'      => Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .input-text:focus'  => 'color:{{VALUE}};',
                            '{{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text:focus'  => 'color:{{VALUE}};',
                         
                         
                        ],
                    ]
                );
              
                $this->add_control(
                    'input_box_hover_border_color',
                    [
                        'label'     => esc_html__( 'Border Color', 'element-ready-pro' ),
                        'type'      => Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .input-text:focus'   => 'border-color:{{VALUE}};',
                            '{{WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text:focus'   => 'border-color:{{VALUE}};',
                         ],
                    ]
                );
                $this->add_group_control(
                    Group_Control_Box_Shadow:: get_type(),
                    [
                        'name'     => 'input_box_hover_shadow',
                        'selector' => '{WRAPPER}}  .input-text:focus, {WRAPPER}} .modal .modal-dialog .modal-content .modal-body .input-box .input-text:focus',
                          
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();


        $this->start_controls_section(
            'alignment_success_msg_section',
            [
                'label' => esc_html__( 'Success Message', 'element-ready-pro' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
			'success_msg_align', [
				'label'   => esc_html__( 'Alignment', 'element-ready-pro' ),
				'type'    => Controls_Manager::CHOOSE,
				'options' => [

                    'left'		 => [
                        
                        'title' => esc_html__( 'Left', 'element-ready-pro' ),
                        'icon'  => 'fa fa-align-left',
                    
                    ],
                    'center'	     => [
                        
                        'title' => esc_html__( 'Center', 'element-ready-pro' ),
                        'icon'  => 'fa fa-align-center',
                    
                    ],
                    'right'	 => [

                        'title' => esc_html__( 'Right', 'element-ready-pro' ),
                        'icon'  => 'fa fa-align-right',
                        
                    ],
				
				],
               'default' => 'left',
            
                'selectors' => [
                     '{{WRAPPER}} .success' => 'text-align: {{VALUE}};',

				],
			]
        );//Responsive control end
        $this->add_control(
            'tsuccess__text_color',
            [
                'label'     => esc_html__( 'Message Color', 'element-ready-pro' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .success'  => 'color:{{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography:: get_type(),
            [
                'name'     => 'tsucces_text_typography',
                
                'label'     => esc_html__( 'Message', 'element-ready-pro' ),
                'selector' => '{{WRAPPER}} .success',
                   
            ]
        );

        $this->add_control(
            'tsuccess_link_text_color',
            [
                'label'     => esc_html__( 'Link Color', 'element-ready-pro' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .success a'  => 'color:{{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography:: get_type(),
            [
                'name'     => 'tsuccess_typography',
                
                'label'     => esc_html__( 'Link', 'element-ready-pro' ),
                'selector' => '{{WRAPPER}} .success a',
                   
            ]
        );
        $this->add_responsive_control(
			'success_margin',
			[
				'label'      => esc_html__( 'Margin', 'element-ready-pro' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} .success' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'error__msg_section',
            [
                'label' => esc_html__( 'Error Message', 'element-ready-pro' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
			'error_msg_align', [
				'label'   => esc_html__( 'Alignment', 'element-ready-pro' ),
				'type'    => Controls_Manager::CHOOSE,
				'options' => [

                    'left'		 => [
                        
                        'title' => esc_html__( 'Left', 'element-ready-pro' ),
                        'icon'  => 'fa fa-align-left',
                    
                    ],
                    'center'	     => [
                        
                        'title' => esc_html__( 'Center', 'element-ready-pro' ),
                        'icon'  => 'fa fa-align-center',
                    
                    ],
                    'right'	 => [

                        'title' => esc_html__( 'Right', 'element-ready-pro' ),
                        'icon'  => 'fa fa-align-right',
                        
                    ],
				
				],
               'default' => 'left',
            
                'selectors' => [
                     '{{WRAPPER}} .errors' => 'text-align: {{VALUE}};',

				],
			]
        );//Responsive control end
        $this->add_control(
            'error__text_color',
            [
                'label'     => esc_html__( 'Message Color', 'element-ready-pro' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .errors li'  => 'color:{{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography:: get_type(),
            [
                'name'     => 'eror_text_typography',
                
                'label'     => esc_html__( 'Message', 'element-ready-pro' ),
                'selector' => '{{WRAPPER}} .errors li',
                   
            ]
        );

       
        $this->add_responsive_control(
			'error_msg_margin',
			[
				'label'      => esc_html__( 'Margin', 'element-ready-pro' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} .errors' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
        );
        $this->add_responsive_control(
			'error_msg_padding',
			[
				'label'      => esc_html__( 'Padding', 'element-ready-pro' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} .errors li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
        );

        $this->end_controls_section();
    } //Register control end


    protected function render( ) { 

        $settings     = $this->get_settings();
        $widget_id    = 'element-ready-'.$this->get_id().'-';
       
        
       ?>
     
    <?php if($settings['_style'] == 'style1'): ?>

        <?php include('layout/user/style1.php'); ?>   

    <?php endif; ?>  

    <?php if($settings['_style'] == 'style2'): ?>

        <?php include('layout/user/style2.php'); ?>   

    <?php endif; ?>

    <?php  

    }
    
    protected function content_template() { }
}