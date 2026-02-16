
// Added React import to resolve React namespace issues for ReactNode types
import React from 'react';

export interface ServiceCard {
  id: string;
  title: string;
  description: string;
  icon: React.ReactNode;
  badge?: string;
  link: string;
}

export interface Step {
  number: number;
  title: string;
  details: string[];
  icon: React.ReactNode;
}

export interface Review {
  id: string;
  author: string;
  role: string;
  rating: number;
  content: string;
}