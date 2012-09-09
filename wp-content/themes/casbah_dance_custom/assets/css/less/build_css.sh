#!/bin/bash

LESSC="lessc --yui-compress --include-path=."

if which -s lessc; then
	$LESSC casbah-bootstrap.less > ../casbah.min.css
	$LESSC responsive.less > ../casbah-responsive.min.css
else
  echo 'Error: lessc not found. Install Node.js then: npm install -g less';
	exit 1;
fi
